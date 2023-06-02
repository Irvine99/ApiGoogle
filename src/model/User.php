<?php
require_once 'src/config/connect_bddClass.php';
require_once 'src/model/Project.php';
class User extends Project{
    public $id;
    public $username;
    public $userlastname;
    public $email;
    public $mdp;
    public $id_role;
    public $token;
   
public function createToSignin(array $userForm):bool{
   
    if(!isset($userForm['email']) OR $userForm['email'] == ''){
      
        return false;
    }
    if(!isset($userForm['name']) OR $userForm['name'] == ''){

        return false;
    }
    if(!isset($userForm['lastname']) OR $userForm['name'] == ''){

        return false;
    }

    $this->email = $userForm['email'];
    $this->username = $userForm['name'];
    $this->userlastname = $userForm['lastname'];
    
    return true;
    }

}

    class UserRepository extends connect_bdd{
    public function __construct(){
        parent::__construct();
    }

    public function getUserByEmailAndPseudo($email){
        $req = $this->bdd->prepare('SELECT * FROM user WHERE email_user = ?');
        $req->execute([$email]);
        $data = $req->fetch();
        if($data != false){
            $user = new User();
            $user->id = $data['Id_users'] ;
            $user->email = $data['email_user'];
            $user->mdp = $data['psw_users'];
            $user->id_role = $data['Id_roles'];
            return $user;
        }else{
            
            return [];
        }
    }

    public function findByEmailAndName (string $email, string $name){
        $req = $this ->bdd->prepare('SELECT id_user FROM user WHERE email_user =? AND name_user =? LIMIT 1');
        $req->execute([$email,$name]);
        return $req->fetch(PDO::FETCH_ASSOC);
    }


    public function insertUser(User $user){
        $token = bin2hex(random_bytes(25));
        $req = $this->bdd->prepare("INSERT INTO user (email_user,name_user,last_name_user,token_user,id_role)
        VALUES (?,?,?,?,?)");
        $req->execute([
            $user->email,
            $user->username,
            $user->userlastname,
            $token , 
            2
            
        ]);
        $lastId = $this->bdd->lastInsertId();
        return ['id'=>$lastId,'token'=>$token];
    }

    public function getLastIdUser($lastId){
        $req = $this->bdd->prepare("SELECT id_user FROM user WHERE id_user=? LIMIT 1");
        $req->execute([$lastId]);
        return $req->fetchColumn();
    }
    public function insertRelation($lastIdUser,$lastIdProject){
        $req = $this->bdd->prepare("INSERT INTO project_user (id_user,id_project) VALUES (?,?)");
        $req->execute([$lastIdUser,$lastIdProject]);
        
    }

    public function deleteAll($id_User,$id_Project) {
        try {
            $req = $this->bdd->prepare('DELETE FROM project_user WHERE id_user = ? AND id_project=?');
            $req->execute([$id_User,$id_Project]);

            $req = $this->bdd->prepare('DELETE FROM user WHERE id_user = ?');
            $req->execute([$id_User]);

            $req = $this->bdd->prepare('DELETE FROM project WHERE id_project = ?');
            $req->execute([$id_Project]);
            return true;
        } catch (Exception $e) {
            return false;
        }
        }
        
        public function updateUserandProject($new_name, $new_lastname,$new_json,$new_proname,$new_email,$id_User,$id_Project){
            try {
            $req = $this->bdd->prepare('UPDATE user SET email_user = ?, name_user =?, last_name_user =? WHERE id_user =?');
            $req->execute([$new_email,$new_name,$new_lastname,$id_User]);

            $req = $this->bdd->prepare('UPDATE project SET name_project =?, json_project=? WHERE id_project =?');
            $req->execute([$new_proname,$new_json,$id_Project]);

            return true;
            
        }catch(Exception $e) {
        }
        }
        public function getAllUsers() {
            $query = '
                SELECT u.*, p.*, pu.*
                FROM user AS u
                INNER JOIN project_user AS pu ON u.id_user = pu.id_user
                INNER JOIN project AS p ON pu.id_project = p.id_project
            ';
            $req = $this->bdd->prepare($query);
            $req->execute();
            $datas = $req->fetchAll();
            $users = [];
        
            foreach ($datas as $data) {
                // Create a new User object and set its properties from the row data
                $user = new User(); 
                $user->id = $data['id_user'];
                $user->username = $data['name_user'];
                $user->userlastname = $data['last_name_user'];
                $user->email = $data['email_user'];
                $user->mdp = $data['password_user'];
                $user->id_role = $data['id_role'];
                $user->name = $data['name_project'];
                $user->logo = $data['logo_project'];
                $user->json = $data['json_project'];
                $user->id_pro = $data['id_project'];
                $user->token = $data['token_user'];
                $users[] = $user;
                
            }
        
            return $users;
           

        }

        public function loginUser($email){

            $req = $this->bdd->prepare("SELECT * FROM user WHERE email_user = ?");
            $req->execute([$email]);
            $data = $req->fetch();
            if($data != false){
                $user = new User();
                $user->id = $data['id_user'];
                $user->email = $data['email_user'];
                $user->mdp = $data['password_user'];
                $user->id_role = $data['id_role'];
                $_SESSION['id_role'] = $user->id_role;
            }
        }
                
     public  function login() {
            $email = $_POST['email_user'];
            $userRepo = new UserRepository();
            $userRepo->loginUser($email);
        
            $api = new ConnectApi();
            $data = $api->connectApi();
        
            $date = $api->getDate();
            $dateTotal = $api->getDateTotal();
        
            $_SESSION['date'] = $date;
            $result = $api->getInfo($data, $date);
            $resultTotal = $api->getInfo($data, $dateTotal);
            // $_SESSION['test'] = $data;
        
            $_SESSION['result'] = $result;
            $_SESSION['resultTotal'] = $resultTotal;
            dateFormat();
            header('location: index.php');
        }

        public function verifPsw($getToken,$setpsw) {
            if(isset($_GET['token']) && !empty($_GET['token'])) {

                $recupUser = $this->bdd->prepare('SELECT * FROM user WHERE token_user = ?');
                $recupUser->execute($getToken);
                if($recupUser) {
                    $userInfo = $recupUser->fetch();
                    if($userInfo) {
                        $confirmation = $this->bdd->prepare('INSERT INTO user password_user = ? WHERE token_user = ?');
                        $confirmation->execute([$setpsw,$getToken]);
                        header('location:connexion.php');
                    }else{
                        echo "Compte déjà actif";
                    }
            
                }else {
                    echo "Token ou id incorect";
                }
            
            }else {
                echo "Aucun utilisateur trouvé";
            }
        }            
    

    }
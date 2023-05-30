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
    
    
    
    
    // public function __construct($username, $userlastname, $email, $mdp,$name,$json,$id){
    //     parent::__construct($name,$json,$id);
    //     $this->username = $username;
    //     $this->userlastname = $userlastname;
    //     $this->email = $email;
    //     $this->mdp = $mdp;
    // }
     

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
public function getUserById($getIdUser){
    $req = $this->bdd->prepare('SELECT * FROM users WHERE Id_users = ?');
    $req->execute([$getIdUser]);
    $data = $req->fetch();
    if($data != false){
        $user = new User();
        $user->id = $data['Id_users'] ;
        $user->email = $data['email_users'];
        $user->pseudo = $data['pseudo_users'];
        $user->mdp = $data['psw_users'];
        $user->id_role = $data['Id_roles'];
        $user->token = $data['token_users'];
        $user->actif = $data['actif_users'];

        return $user;
    }else{
        
        return [];
    }
}

public function getUserByPseudo($pseudo){
    $req = $this->bdd->prepare('SELECT * FROM users WHERE pseudo_users = ?');
    $req->execute([$pseudo]);
    $data = $req->fetch();
    if($data != false){
        $user = new User();
        $user->id = $data['Id_users'] ;
        $user->email = $data['email_users'];
        $user->pseudo = $data['pseudo_users'];
        $user->mdp = $data['psw_users'];
        $user->id_role = $data['Id_roles'];


public function insertUserWithProject (Project $project , User $user){
    $req = $this ->bdd->prepare('INSERT INTO project_user (id_project, id_user)
    SELECT p.id_project, u.id_user
    FROM user u
    JOIN project p ON p.name_project = ?
    WHERE u.name_user = ?
    VALUES (?,?)');

$req->execute([
    $project->name,
    $user->name 
    

]);
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
    return $lastId;
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
}


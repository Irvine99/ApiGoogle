<?php
require_once 'src/config/connect_bddClass.php';
class User{
    public $id;
    public $username;
    public $userlastname;
    public $email;
    public $mdp;
    public $id_role;
   
     

public function createToSignin(array $userForm):bool{
   
    if(!isset($userForm['email']) OR $userForm['email'] == ''){

        return false;
    }
    if(isset($userForm['password']) OR strlen($userForm['password'])>=4 && $userForm['confirm_password'] == $userForm['password']){

        $this->mdp = $userForm['password'];
    }else{

        return false;
    }

    $this->email = $userForm['email'];
    $this->mdp = $userForm['password'];

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

        return $user;
    }else{
        
        return [];
    }
}

public function getUserByEmail($email){
    $req = $this->bdd->prepare('SELECT * FROM user WHERE email_user = ?');
    $req->execute([$email]);
    $data = $req->fetch();
    if($data != false){
        $user = new User();
        $user->id = $data['id_user'] ;
        $user->email = $data['email_user'];
        $user->mdp = $data['password_user'];
        $user->id_role = $data['id_role'];

        return $user;
    }else{
        
        return [];
    }
}
public function insertUserWithProject (Project $project){
    $req = $this ->bdd->prepare('INSERT INTO project_user (id_project, id_user)
    SELECT p.id_project, u.id_user
    FROM user u
    JOIN project p ON p.name_project = ?
    WHERE u.name_user = ?
    VALUES (?,?)');

$req->execute([
    
    

]);
} 


public function insertUser(User $user){
    $req = $this->bdd->prepare("INSERT INTO user (email_user,password_user,id_role)
    VALUES (?,?,?)");
    $req->execute([
        $user->email,
        $user->mdp,
        2
    ]);
}
}


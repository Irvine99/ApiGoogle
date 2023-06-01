<?php
require_once 'src/config/connect_bddClass.php';

class Project {

    public $id_pro;
    public $name;
    public  $json;
    public $logo;

    public function createToSignin(array $projectForm): bool {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return false;
        }
    
        // Check if a file has been uploaded
        $projet_json = $_FILES['projet_json'];
        if (!isset($projectForm['nom_projet']) || $projectForm['nom_projet'] == '' ||
            !$projet_json || $projet_json['error'] !== UPLOAD_ERR_OK ||
            pathinfo($projet_json['name'], PATHINFO_EXTENSION) !== 'json') {
            return false;
        }
    
        // Move file to destination path
        $destinationPath = 'credentials/';
        $newFilename = uniqid() . '.json'; // generate unique filename
        $uploadPath = $destinationPath . $newFilename;

        if (!move_uploaded_file($projet_json['tmp_name'], $uploadPath)) {
            throw new Exception("Une erreur est survenue lors de l'upload du fichier.");
        }

        if(!empty($_FILES['logo_client']))
 {
     $nameFile = $_FILES['logo_client']['name'];
     $typeFile = $_FILES['logo_client']['type'];
     $tmpFile = $_FILES['logo_client']['tmp_name'];
     $errorFile = $_FILES['logo_client']['error'];
     $sizeFile = $_FILES['logo_client']['size'];

     $extensions = ['png', 'jpg', 'jpeg', 'gif', 'jiff'];
     $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/jiff'];

     $extension = explode('.', $nameFile);

     $max_size = 50000000;

     if(in_array($typeFile, $type))
     {
         if(count($extension) <=2 && in_array(strtolower(end($extension)), $extensions))
         {
             if($sizeFile <= $max_size && $errorFile == 0)
             {
                 if(move_uploaded_file($tmpFile, $image = 'upimg/' . uniqid() . '.' . end($extension)) )
                 {
                     echo "upload  effectué !";
                 }
                 else
                 {
                     echo "Echec de l'upload de l'image !";
                 }
             }
             else
             {
                 echo "Erreur le poids de l'image est trop élevé !";
             }
         }
         else
         {
             echo "Merci d'upload une image !";
         }
     }
     else
     {
         echo "Type non autorisé !";
     }
    }
    
        $this->name = $projectForm['nom_projet'];
        $this->json = $uploadPath;
        $this->logo = $image ;
        return true;
    }
}
    
class ProjectRepository extends connect_bdd{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertProject( Project $project){
        $req = $this->bdd->prepare("INSERT INTO project (name_project,json_project,logo_project) VALUES (?,?,?)");
        $req -> execute([$project->name,$project->json,$project->logo]);
        $lastId = $this->bdd->lastInsertId();
        return $lastId;
        
    }

    public function getLastIdprojet(Project $project){
        $req = $this->bdd->prepare("SELECT project_id FROM project WHERE name_project = ?");
        $req->execute([$project->name]);
        $lastId = $req->fetchColumn();
        return $lastId;
    }
    

}

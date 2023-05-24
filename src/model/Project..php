<?php
require_once 'src/config/connect_bddClass.php';

class Project {

    public $id;
    public $name;
    public string $json;

    public function setJsonData(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier si un fichier a été uploadé
            if (isset($_FILES['jsonFile']) && $_FILES['jsonFile']['error'] === UPLOAD_ERR_OK) {
                $tmpFilePath = $_FILES['jsonFile']['tmp_name'];
        
                // Vérifier si c'est bien un fichier JSON
                if (pathinfo($_FILES['jsonFile']['name'], PATHINFO_EXTENSION) === 'json') {
                    // Déplacer le fichier vers l'emplacement souhaité
                    $destinationPath = 'chemin/vers/dossier/destination/fichier.json';
                    move_uploaded_file($tmpFilePath, $destinationPath);
                    
                    $this->json = $destinationPath;
                    echo 'Fichier JSON uploadé avec succès !';
                } else {
                    echo 'Le fichier doit être au format JSON.';
                }
            } else {
                echo 'Une erreur est survenue lors de l upload du fichier.';
            }
        }


       
    }

}

class ProjectRepository extends connect_bdd{
    public function __construct(){
        parent::__construct();
    }
    
    public function insertProject(Project $project){
        $req = $this->bdd->prepare("INSERT INTO project (project_name, project_json) VALUES (?;?)");
        $req -> execute($project->name, $project->json); 
}
}


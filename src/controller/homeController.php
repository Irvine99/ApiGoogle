<?php
require_once 'src/model/Performances.php';
require_once 'src/model/Periodes.php';
require_once 'src/model/User.php';
require_once 'src/model/Project.php';

//inscription et connexion 
function signUpForm(){
    require('src/view/inscription.php');
}

function addForm(){
    require('src/view/add.php');
}

function adminPage(){
    $user = new User();
    $userRepo = new UserRepository();
    $allUsers = $userRepo->getAllUsers($user);
    require('src/view/admin.php');
}
function modifPage(){
    $user = new User();
    require('src/view/modifier.php');
}

function deleteUser(){
    $id_User = isset($_POST['userId']) ? $_POST['userId'] : null;
    $id_Project = isset($_POST['projectId']) ? $_POST['projectId'] : null;
    var_dump($id_Project);
    var_dump($id_User);
    $userRepository = new UserRepository();
    $delete = $userRepository->deleteAll($id_User,$id_Project);
      
      if ($delete) {
        echo "Deletion was successful.";
      } else {
        echo "Deletion failed.";
      }
    }

    function updateUserById(){
        $id_User = isset($_POST['userId'])? $_POST['userId'] : null;
        $id_Project = isset($_POST['projectId'])? $_POST['projectId'] : null;
        $new_name = isset($_POST['name'])? $_POST['name'] : null;
        $new_lastname = isset($_POST['lastname'])? $_POST['lastname'] : null;
        $new_email = isset($_POST['email'])? $_POST['email'] : null;
        //$new_logo = isset($_POST['logo_client'])? $_POST['logo_client'] : null;
        $new_json = isset($_POST['projet_json'])? $_POST['projet_json'] : null;
        $new_proname = isset($_POST['nom_projet'])? $_POST['nom_projet'] : null;
        var_dump($id_Project);
        var_dump($id_User);
        var_dump($new_lastname);
        var_dump($new_json);
        var_dump($new_proname);
        
        $userRepository = new UserRepository();
        $update = $userRepository->updateUserandProject($new_name,$new_lastname,$new_json,$new_proname,$new_email,$id_User,$id_Project);
        if ($update) {
            echo "Update was successful.";
        } else {
            echo "Update failed.";
        }
    }

  


function signUp():void{
    $userRepository = new UserRepository();
    $ProjectRepository = new ProjectRepository();
    $user = $userRepository->findByEmailAndName($_POST['email'],$_POST['name']);
    if($user == []){
        $user = new User();
        $project = new Project();
        var_dump($project);
        $tmppro = $project->createToSignin($_POST);
        var_dump($_POST);
        $tmp = $user->createToSignin($_POST);
        if($tmp && $tmppro){
            $lastIdUser= $userRepository->insertUser($user);
            $lastIdProject = $ProjectRepository->insertProject($project);
            $userRepository->insertRelation($lastIdUser,$lastIdProject);
            var_dump('good');
        }else{
            var_dump('pasbon');
        }
    }
}


//FIN inscription et connexion

function test() {

    $result = new PerformancesRepo;
    $dates = $result->getDate();    
    $clicksbydates = $result->getCliksByDate();

    include('src/view/homePage.php');
}

function sideNavData(){
        
    require 'src/view/dataDomain.php';
}

function getUniqueDates(){
    $result = new PerformancesRepo;
    $dates = $result->getDate();
    $data = $result->getUniqueDates();
    $clicksbydates = $result->getCliksByDate();
    $title = choiceTitle();
    $datas = choiceData();

    
    include('src/view/homePage.php');
}

function choiceTitle(){
    $title = "";

    if($_GET['action'] == "click"){
        $title = "click";
    }elseif($_GET['action'] == "position"){
        $title = "position";
    }elseif($_GET['action'] == "ctr"){
        $title = "ctr";
    }elseif($_GET['action'] == "impressions"){
        $title = "impression";
    }else{
        $title = "click";
    }
    return $title;
}

function choiceData(){
    if($_GET['action'] == "clics"){
        $result = new PerformancesRepo;
        $clicksbydates = $result->getCliksByDate();
        $datas = [];
        foreach ($clicksbydates as $key => $value) {
        
            $data = $value->clicks;
            $datas[] = $data;

        }
        return $datas;
    }elseif($_GET['action'] == "position"){
        $result = new PerformancesRepo;
        $clicksbydates = $result->getCliksByDate();
        $datas = [];
        foreach ($clicksbydates as $key => $value) {
        
            $data = $value->position;
            $datas[] = $data;

            
        }
        return $datas;
    }elseif($_GET['action'] == "ctr"){
        $result = new PerformancesRepo;
        $clicksbydates = $result->getCliksByDate();
        $datas = [];
        foreach ($clicksbydates as $key => $value) {
        
            $data = $value->ctr;
            $datas[] = $data;

            
        }
        return $datas;
    }elseif($_GET['action'] == "impressions"){
        $result = new PerformancesRepo;
        $clicksbydates = $result->getCliksByDate();
        $datas = [];
        foreach ($clicksbydates as $key => $value) {
        
            $data = $value->impressions;
            $datas[] = $data;

            
        }
        return $datas;
    }else{
        $result = new PerformancesRepo;
        $clicksbydates = $result->getCliksByDate();
        $datas = [];
        foreach ($clicksbydates as $key => $value) {
        
            $data = $value->clicks;
            $datas[] = $data;

            
        }
        return $datas;
    }
}














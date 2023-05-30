<?php
require_once 'src/model/Performances.php';
require_once 'src/model/Periodes.php';
require_once 'src/model/User.php';
require_once 'src/model/Project.php';

//inscription et connexion 
function signUpForm(){
    require('src/view/inscription.php');
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
            $lastIdUser = $userRepository->insertUser($user);
            $lastIdProject = $ProjectRepository->insertProject($project);
            $userRepository->insertRelation($lastIdUser,$lastIdProject);
            var_dump('good');
        }else{
            var_dump('pasbon');
        }
    }
}

// function login(){
//     $userRepo = new UserRepository();
//     $user = $userRepo->findByEmailAndName($_POST['email'],$_POST['your_name']);
//     if($user != []){
//         if(password_verify($_POST['pass'],$user->mdp)){
//             $_SESSION['id_role'] = $user->id_role;
//             $_SESSION['id_user'] = $user->id;
//             // $_SESSION['token'] = $user->token;   
//         }else{
//             echo 'info pas correct';
//             //header('Location: ?action=LoginForm');
//         }
//     }else{
//         //header('Location: ?action=LoginForm');
//     }
// } 
// //FIN inscription et connexion

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

// function login(){
//     $userRepo = new UserRepository();
//     $user = $userRepo->getUserByEmail($_POST['email']);
//     if($user != []){
//         if(password_verify($_POST['pass'],$user->mdp)){
//             $_SESSION['id_role'] = $user->id_role;
//             $_SESSION['id_user'] = $user->id;
//             header('Location: ?action=');
//         }else{
//             echo 'info pas correct';
//             //header('Location: ?action=LoginForm');
//         }
//     }else{
//         //header('Location: ?action=LoginForm');
//     }
// } 












<?php
require_once 'src/model/Performances.php';
require_once 'src/model/Periodes.php';
require_once 'src/model/User.php';
require_once 'src/model/Project.php';
require_once 'src/config/connect_api.php';

//inscription et connexion 
function signUpForm(){
    require('src/view/inscription.php');
}

function loginForm(){
    require('src/view/connexion.php');
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

function login() {
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

function test() {

    $result = new PerformancesRepo;

    if(isset($_POST['startDate']))
    {
        $result->setDate($_POST["startDate"], $_POST["endDate"]);
        include('src/view/homepage.php');
    }
    else
    {
        $result->getDate();
        include('src/view/homepage.php');
    }

    // $clicksbydates = $result->getCliksByDate();
}

function disconnectUser(){
    session_destroy();
    include 'src/view/connexion.php';
}


function connect_session() {
    $result= new PerformancesRepo;
    if(isset($_SESSION['id_role'])){
        $result->getDate();
        include('src/view/homepage.php');
    }else{
        include ('src/view/connexion.php');
    }
}

function sideNavData(){
    
    require 'src/view/dataDomain.php';
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
        foreach ($clicksbydates as $key => $value) 
        {
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

function setDate(){
    $api = new ConnectApi();
    $data = $api->connectApi();
    $startDate = date_create_from_format("d/m/Y", $_POST['startDate']);
    $startDate = date_format($startDate, "Y-m-d");
    
    $endDate = date_create_from_format("d/m/Y", $_POST['endDate']);
    $endDate = date_format($endDate, "Y-m-d");

    $date = $api->setDate($startDate, $endDate);
    $dateTotal = $api->setDateTotal($startDate, $endDate);
 
    $result = $api->getInfo($data, $date);
    $resultTotal = $api->getInfo($data, $dateTotal);
    $_SESSION['date'] = $dateTotal;
    $_SESSION['result'] = $result;
    $_SESSION['resultTotal'] = $resultTotal;
    dateFormat();
    
    header('location: index.php');

    
}

function dateFormat(){
    $startDate = date_create_from_format("Y-m-d", $_SESSION['date']['startDate']);
    $startDate = date_format($startDate, "d/m/Y");
    
    $endDate = date_create_from_format("Y-m-d", $_SESSION['date']['endDate']);
    $endDate = date_format($endDate, "d/m/Y");

    $_SESSION['startDateFormatted'] = $startDate;
    $_SESSION['endDateFormatted'] = $endDate;
}









<?php


require_once 'src/model/Performances.php';
require_once 'src/model/Periodes.php';

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

function login(){
    $userRepo = new UserRepository();
    $user = $userRepo->getUserByEmail($_POST['email']);
    if($user != []){
        if(password_verify($_POST['pass'],$user->mdp)){
            $_SESSION['id_role'] = $user->id_role;
            $_SESSION['id_user'] = $user->id;
            header('Location: ?action=');
        }else{
            echo 'info pas correct';
            //header('Location: ?action=LoginForm');
        }
    }else{
        //header('Location: ?action=LoginForm');
    }
} 



function signUp(){
    $userRepo = new UserRepository();
    $user = new User();
    if($user->createToSignin($_POST)){
        // le user est créé sans attributs vide
        $userTmpEmail = $userRepo->getUserByEmail($_POST['email']);
        if($userTmpEmail == []){
           
                $user->mdp = password_hash($user->mdp, PASSWORD_BCRYPT);
                $userRepo->insertUser($user);
          
            }   
        }else{

            echo 'email deja existant';
            //header('Location: ?action=SignInForm');
        }
    }

function signUpForm(){
    require('src/view/inscription.php');
}





<?php
require_once 'vendor/autoload.php';
session_start();

require 'src/controller/homeController.php';
require 'src/model/User.php';
if($_GET['action']) {
    loginForm();
    switch($_GET['action']) {
        case 'LoginTraitement':
            login();
            break;
            case 'setPsw':
                setPsw();
                break;
            case 'setPswForm':
                setPswForm();
                break;
    }
}else if(isset($_SESSION['id_role'])) {
    if(isset($_GET['action']) && $_GET['action'] !== ''){
        switch($_GET['action']) {
            case 'test':
                test();
                break;
            case 'stan':
                sideNavData();
                break;
            case 'info':
                test();
                break;
            case 'getDate':
                setDate();
                break;
            case 'LoginTraitement':
                login();
                break;
            case 'signUpForm' :
                signUpForm();
                break;
            case 'signUp':
                signUp();
                break;
                
            case 'signUp2':
                signUp();
                break;
            case 'deco':
                disconnectUser();
                break;

                case 'LoginTraitement':
                    login();
                    break;
                case 'signUpForm' :
                    signUpForm();
                    break;
                case 'signUp':
                    signUp();
                    break;
                
                case 'addForm':
                    addForm();
                    break;
                
                case 'adminPage':
                    adminPage();
                    break;
                case 'deleteUser':
                    deleteUser();
                    break;
                case 'updateUser':
                    updateUserById();
                    break;
                case 'modifPage':
                    modifPage();
                    break;
                
                    default:
                   

            
       
                test();
                   
        
        } 
    }else{
        test();
    }
}

// if(isset($_GET['action']) && $_GET['action'] !== ''){
//         switch($_GET['action']) {
//             case 'test':
//                 test();
//                 break;
//             case 'stan':
//                 sideNavData();
//                 break;
//             case 'info':
//                 test();
//                 break;
//             case 'getValue':
//                 getDate();
//                 break;
//             case 'position':
//                 baseDate();
//                 break;
//             case 'clics':
//                 baseDate();
//                 break;
//             case 'impressions':
//                 baseDate();
//                 break;
//             case 'ctr':
//                 baseDate();
//                 break;
//             case 'LoginTraitement':
//                 login();
//                 break;
//             case 'signUpForm' :
//                 signUpForm();
//                 break;
//             case 'signUp':
//                 signUp();
//                 break;
//             case 'signUp2':
//                 signUp();
//                 break;
            
//                 default:
                   
            
//         } 
//     }else{
//         test();
//     }


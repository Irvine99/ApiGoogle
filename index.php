<?php
session_start();

require 'src/controller/homeController.php';
require 'src/model/User.php';
var_dump($_SESSION);
if(empty($_SESSION)) {
    loginForm();
    switch($_GET['action']) {
        case 'LoginTraitement':
            login();
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
            // case 'getValue':
            //     getDate();
            //     break;
            // case 'position':
            //     baseDate();
            //     break;
            // case 'clics':
            //     baseDate();
            //     break;
            // case 'impressions':
            //     baseDate();
            //     break;
            // case 'ctr':
            //     baseDate();
            //     break;
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


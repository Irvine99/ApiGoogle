<?php
session_start();

require 'src/controller/homeController.php';
require 'src/model/User.php';

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
            case 'getValue':
                newDate();
                break;
            case 'position':
                newDate();
                break;
            case 'clics':
                newDate();
                break;
            case 'impressions':
                newDate();
                break;
            case 'ctr':
                newDate();
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
                
                    default:
                   
            
        } 
    }else{
        test();
    }


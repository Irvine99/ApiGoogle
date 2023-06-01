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
                getUniqueDates();
                break;
            case 'position':
                getUniqueDates();
                break;
            case 'clics':
                getUniqueDates();
                break;
            case 'impressions':
                getUniqueDates();
                break;
            case 'ctr':
                getUniqueDates();
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
                   
            
        } 
    }else{
        test();
    }


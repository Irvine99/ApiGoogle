<?php
require_once 'vendor/autoload.php';
session_start();

require 'src/controller/homeController.php';
require 'src/model/User.php';

if(empty($_SESSION)) 
{
    if(isset($_GET['action']) && $_GET['action'] !== '')
    { 
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
            case 'deco':
                disconnectUser();
                break;
        }
    }
    else
    {
        loginForm();
    }
}
else if(isset($_SESSION['id_role']))
{
    if(isset($_GET['action']) && $_GET['action'] !== '')
    {
        switch($_GET['action']) 
        {
            case 'home':
                home();
                break;
            case 'info':
                home();
                break;
            case 'getDate':
                setDate();
                break;
            case 'signUpForm' :
                signUpForm();
                break;
            case 'signUp':
                signUp();
                break;
            case 'deco':
                disconnectUser();
                break;
            case 'LoginTraitement':
                login();
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
            home();    
        }
    }
    else
    {
        home();
    }
}
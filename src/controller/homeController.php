<?php
require_once 'src/model/User.php';
require_once 'src/model/Project.php';
require_once 'src/config/connect_api.php';

//inscription et connexion 
function signUpForm()
{
    require('src/view/inscription.php');
}

function setPswForm()
{
    session_destroy();


    $getToken = $_GET['token'];

    $userRepository = new UserRepository();
    $tokenTrue = $userRepository->verifToken($getToken);

    if ($tokenTrue === true) {
        $_SESSION['userToken'] = $getToken;
        require('src/view/setpsw.php');
    } else {
        require('src/view/setpsw.php');
    }
}

function addForm()
{
    require('src/view/add.php');
}

function adminPage()
{
    $user = new User();
    $userRepo = new UserRepository();
    $allUsers = $userRepo->getAllUsers($user);
    require('src/view/admin.php');
}

function modifPage()
{
    $user = new User();
    require('src/view/modifier.php');
}

function deleteUser()
{
    $id_User = isset($_POST['userId']) ? $_POST['userId'] : null;
    $id_Project = isset($_POST['projectId']) ? $_POST['projectId'] : null;
    $userRepository = new UserRepository();
    $delete = $userRepository->deleteAll($id_User, $id_Project);

    if ($delete) {
        echo "Deletion was successful.";
    } else {
        echo "Deletion failed.";
    }
}

function updateUserById()
{
    $id_User = isset($_POST['userId']) ? $_POST['userId'] : null;
    $id_Project = isset($_POST['projectId']) ? $_POST['projectId'] : null;
    $new_name = isset($_POST['name']) ? $_POST['name'] : null;
    $new_lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $new_email = isset($_POST['email']) ? $_POST['email'] : null;
    $new_logo = isset($_POST['logo_client'])? $_POST['logo_client'] : null;
    $new_json = isset($_POST['projet_json']) ? $_POST['projet_json'] : null;
    $new_proname = isset($_POST['nom_projet']) ? $_POST['nom_projet'] : null;
    $userRepository = new UserRepository();
    $update = $userRepository->updateUserandProject($new_name, $new_lastname, $new_json, $new_proname, $new_email, $id_User,$new_logo, $id_Project);
    if ($update) {
        echo "Update was successful.";
    } else {
        echo "Update failed.";
    }
}

function loginForm()
{
    require('src/view/connexion.php');
}

function signUp(): void
{
    $userRepository = new UserRepository();
    $ProjectRepository = new ProjectRepository();
    $user = $userRepository->findByEmailAndName($_POST['email'], $_POST['name']);
    if ($user == []) {
        $user = new User();
        $project = new Project();
        $tmppro = $project->createToSignin($_POST);
        $tmp = $user->createToSignin($_POST);
        if ($tmp && $tmppro) {
            
                $idUserAndToken = $userRepository->insertUser($user);
                $lastIdProject = $ProjectRepository->insertProject($project);
                $userRepository->insertRelation($idUserAndToken['id'], $lastIdProject);
                $token =  $idUserAndToken['token'];
                $email_user = $user->email;
                require_once 'src/config/mail.php';
            
        } else {
            echo 'les informations sont incorrects';
        }
    }
}

function login()
{

    $psw = $_POST['password_user'];
    $email = $_POST['email_user'];
    $userRepo = new UserRepository();
    $user = $userRepo->getUserByEmail($email);

    if ($user) {

        if (password_verify($psw, $user->mdp)) {

            $_SESSION['id_role'] = $user->id_role;
            $userData = $user->id;
            $dataID = $userRepo->getInfoById($userData);

            $_SESSION['name_project'] = $dataID->name;
           



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
    }
}


function home()
{
    include('src/view/homepage.php');
}

function disconnectUser()
{
    session_destroy();
    include 'src/view/connexion.php';
}

function sideNavData()
{
    require 'src/view/dataDomain.php';
}

function setDate()
{
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

function dateFormat()
{
    $startDate = date_create_from_format("Y-m-d", $_SESSION['date']['startDate']);
    $startDate = date_format($startDate, "d/m/Y");

    $endDate = date_create_from_format("Y-m-d", $_SESSION['date']['endDate']);
    $endDate = date_format($endDate, "d/m/Y");

    $_SESSION['startDateFormatted'] = $startDate;
    $_SESSION['endDateFormatted'] = $endDate;
}

function setPsw()
{

    $setpsw = htmlspecialchars($_POST['setpsw']);
    $confirmPsw = htmlspecialchars($_POST['confirm_setpsw']);
    $getToken = $_POST['userToken'];
    $userRepo = new UserRepository();
    $verifRegex = $userRepo->verifyPassword($setpsw);
    if (isset($getToken) && isset($setpsw)) {

        if ($verifRegex) {
            if ($setpsw == $confirmPsw) {
                if ($setpsw !== '' && $setpsw != '') {
                    $newpsw = password_hash($setpsw, PASSWORD_DEFAULT);
                    $userRepository = new UserRepository();
                    $userRepository->verifPsw($getToken, $newpsw);
                    header('Location: index.php');
                    
                } else {
                    header("Location:index.php?action=setPswForm&message1=Un des champs est vide&token=$getToken");
                    exit();
                }
            } else {
                header("Location:index.php?action=setPswForm&message2=Un des mots de passe est incorrect&token=$getToken");
                exit();
            }
        } else {
            header("Location:index.php?action=setPswForm&message3=Regex pas bon&token=$getToken");
        }
    } else {
        header("Location:index.php?action=setPswForm&message4=Un des mots de passe est incorrect&token=$getToken");
        exit();

    }
}

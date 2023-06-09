<?php
require_once 'src/model/User.php';
require_once 'src/model/Project.php';
require_once 'src/config/connect_api.php';

function signUpForm()
{
    if($_SESSION['id_role'] === 1)
    {
        require('src/view/inscription.php');
    }
    else
    {
        home();
    }
}

function setPswForm()
{
    session_destroy();

    $getToken = $_GET['token'];

    $userRepository = new UserRepository();
    $tokenTrue = $userRepository->verifToken($getToken);

    if ($tokenTrue === true) 
    {
        $_SESSION['userToken'] = $getToken;
        require('src/view/setpsw.php');
    } 
    else 
    {
        require('src/view/setpsw.php');
    }
}

function adminPage()
{

    if($_SESSION['id_role'] === 1)
    {
        $idUser = $_SESSION['id_user'];
        $user = new User();
        $userRepo = new UserRepository();
        $allUsers = $userRepo->getAllUsers($user);        
        $getData = $userRepo->getInfoById($idUser);
        require('src/view/admin.php');
    }
    else
    {
        home();
    }
    

}



function modifPage()
{
    if($_SESSION['id_role'] === 1)
    {
        $user = new User();
        require('src/view/modifier.php');
    }
    else
    {
        home();
    }
}

function deleteUser()
{
    if($_SESSION['id_role'] === 1)
    {
        $id_User = isset($_POST['userId']) ? $_POST['userId'] : null;
        $id_Project = isset($_POST['projectId']) ? $_POST['projectId'] : null;
        $userRepository = new UserRepository();
        $delete = $userRepository->deleteAll($id_User, $id_Project);

        if ($delete) 
        {
            header("Location: index.php?action=adminPage");
        } 
        else 
        {
            echo "Deletion failed.";
        }
    }
    else
    {
        home();
    }
}

function updateUserById()
{
    if($_SESSION['id_role'] === 1)
    {
        if(isset($_POST['userId']) && isset($_POST['projectId']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['logo_client']) && isset($_POST['nom_projet']))
        {
            $id_User = isset(($_POST['userId'])) ? htmlspecialchars($_POST['userId']) : null;
            $id_Project = isset($_POST['projectId']) ? htmlspecialchars($_POST['projectId']) : null;
            $new_name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
            $new_lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : null;
            $new_email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
            $new_logo = isset($_POST['logo_client']) ? htmlspecialchars($_POST['logo_client']) : null;
            $new_json = isset($_POST['projet_json']) ? htmlspecialchars($_POST['projet_json']) : null;
            $new_proname = isset($_POST['nom_projet']) ? htmlspecialchars($_POST['nom_projet']) : null;
            $userRepository = new UserRepository();
            $update = $userRepository->updateUserandProject($new_name, $new_lastname, $new_json, $new_proname, $new_email, $id_User, $new_logo, $id_Project);
            
            if ($update)
            {
                header("Location:index.php?action=adminPage&messageModifOk=Modification réussi");
            }
            else 
            {
                header("Location:index.php?action=adminPage&messageModif1=Erreur de modification");
            }
        }
      
    }
    else
    {
        home();
    }
}

function loginForm()
{
    if($_SESSION)
    {
        require('src/view/connexion.php');
    }
    else
    {
        disconnectUser();
    }
}

function signUp(): void
{
    if($_SESSION['id_role'] === 1)
    {
        if(isset($_POST['email']) && isset($_POST['name']))
        {
            $emailUser = htmlspecialchars($_POST['email']);
            $nameUser = htmlspecialchars($_POST['name']);
            $userRepository = new UserRepository();
            $ProjectRepository = new ProjectRepository();
            $user = $userRepository->findByEmailAndName($emailUser, $nameUser);
    
            if ($user == [])
            {
                if(isset($_POST['email']) && isset($_POST['lastname']) && isset($_POST['name']) && isset($_POST['nom_projet']) && isset($_FILES['projet_json']) && isset($_FILES['logo_client']))
                {
                    $userForm = [];
                    $userForm[] = htmlspecialchars($_POST['email']) ;
                    $userForm[] = htmlspecialchars($_POST['lastname']);
                    $userForm[] = htmlspecialchars($_POST['name']);
                    $projectForm[] = htmlspecialchars($_POST['nom_projet']);
                    $projectForm[] = $_FILES['projet_json'];
                    $projectForm[] = $_FILES['logo_client'];

                    $user = new User();
                    $project = new Project();
                    $tmppro = $project->createToSignin($projectForm);
                    $tmp = $user->createToSignin($userForm);

                    if ($tmp && $tmppro)
                    {
                        $idUserAndToken = $userRepository->insertUser($user);
                        $lastIdProject = $ProjectRepository->insertProject($project);
                        $userRepository->insertRelation($idUserAndToken['id'], $lastIdProject);
                        $token =  $idUserAndToken['token'];
                        $email_user = $user->email;
                        require_once 'src/config/mail.php';
                        header('Location: index.php?action=adminPage&messageOk=Utilisateur ajouté');
                    } 
                    else 
                    {
                        header("Location:index.php?action=adminPage&message1=Les informations sont incorrects");
                    }
                }
                else
                {
                    header("Location:index.php?action=adminPage&message3=Un des champs est vide");
                }
                
            }
            else
            {
                header("Location:index.php?action=adminPage&message2=L/'utilisateur existe déjà");
            } 
        }
        else
        {
            header("Location:index.php?action=adminPage&message3=Un des champs est vide");
        }        
    }
    else
    {
        home();
    }
}

function login()
{
    if(isset($_POST['password_user']) && isset($_POST['email_user']))
    {
        if ($_POST['password_user'] !== "" && $_POST['email_user'] !== "")
        {
            $psw = htmlspecialchars($_POST['password_user']);
            $email = htmlspecialchars($_POST['email_user']);
            $userRepo = new UserRepository();
            $user = $userRepo->getUserByEmail($email);

            if ($user) 
            {
                if (password_verify($psw, $user->mdp)) 
                {
                    $_SESSION['id_role'] = $user->id_role;
                    $_SESSION['id_user'] = $user->id;
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
    
                    $_SESSION['result'] = $result;
                    $_SESSION['resultTotal'] = $resultTotal;
                    dateFormat();
                    header('location: index.php');
                }
                else 
                {
                    header("Location:index.php?&message1=Une des informations est incorrectes");
                }
            } 
            else 
            {
                header("Location:index.php?&message2=Une des informations est incorrectes");
            }
        } 
        else 
        {
            header("Location:index.php?&message3=Un des champ est vide");
        }
    }
    else
    {
        disconnectUser();
    }
}


function home()
{
    if($_SESSION)
    {
        $idUser = $_SESSION['id_user'];
        $userRepo = new UserRepository;
        $getData = $userRepo->getInfoById($idUser);
        include('src/view/homepage.php');
    }
    else
    {
        disconnectUser();
    }
}

function disconnectUser()
{
    session_destroy();
    include 'src/view/connexion.php';
}

function setDate()
{
    if(isset($_POST['startDate']) && isset($_POST['endDate']))
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
    else
    {
        $api = new ConnectApi();
        $data = $api->connectApi();

        $date = $api->getDate();
        $dateTotal = $api->getDateTotal();

        $_SESSION['date'] = $date;
        $result = $api->getInfo($data, $date);
        $resultTotal = $api->getInfo($data, $dateTotal);


        $_SESSION['result'] = $result;
        $_SESSION['resultTotal'] = $resultTotal;
        dateFormat();
        header('location: index.php');
    }
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
    if(!empty($_POST))
    {
        $setpsw = htmlspecialchars($_POST['setpsw']);
        $confirmPsw = htmlspecialchars($_POST['confirm_setpsw']);
        $getToken = $_POST['userToken'];
        $userRepo = new UserRepository();
        $verifRegex = $userRepo->verifyPassword($setpsw);
        if (isset($getToken) && isset($setpsw)) 
        {
            if ($verifRegex) 
            {
                if ($setpsw == $confirmPsw) 
                {
                    if ($setpsw !== '' && $setpsw != '') 
                    {
                        $newpsw = password_hash($setpsw, PASSWORD_DEFAULT);
                        $userRepository = new UserRepository();
                        $userRepository->verifPsw($getToken, $newpsw);
    
                        header('Location: index.php');
                    } 
                    else 
                    {
                        header("Location:index.php?action=setPswForm&message1=Un des champs est vide&token=$getToken");
                        exit();
                    }
                } 
                else 
                {
                    header("Location:index.php?action=setPswForm&message2=Un des mots de passe est incorrect&token=$getToken");
                    exit();
                }
            } 
            else 
            {
                header("Location:index.php?action=setPswForm&message3=Regex pas bon&token=$getToken");
            }
        } 
        else 
        {
            header("Location:index.php?action=setPswForm&message4=Un des mots de passe est incorrect&token=$getToken");
            exit();
        }
    }
    else
    {
        header('location: index.php');
    }   
}

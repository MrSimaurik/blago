<?php 
include "db.php";
session_start();

switch ($_GET['action']) {
    case 'login':
        if (!empty($_POST['login']) && !empty($_POST['password']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $stm = $connect->query("SELECT * FROM users WHERE login='$login'");
            $result = $stm->fetch();

            if ($result['password']==$password)
            {
                $_SESSION['id_user']=$result['id'];
                $_SESSION['auth']=true;
                $_SESSION['user_data']=$result;

                header('location:account.php?auth=true');
            }
        }
        else {header('location:login.php?error');}
        break;
}
?>
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

        case 'register':
        if (!empty($_POST['login']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['password']))
        {
            $quary = $connect->prepare('INSERT INTO `users`(`id`, `login`, `name`, `phone`, `password`) VALUES (null,?,?,?,?)');

            $user = $quary->execute([
                $_POST['login'],
                $_POST['name'],
                $_POST['phone'],
                $_POST['password']
            ]);
            if ($user) {
                $login = $_POST['login'];
                $stm = $connect->query("SELECT * FROM users WHERE login='$login'");
                $result = $stm->fetch();
                $_SESSION['user_data']=$result;

                header('location:account.php?auth=true');
            } else {
                header('Location:register.php?register=false');
            }
        }else header('Location:register.php?register=false');
            break;
            case 'update':
                if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['phone']))
                {   
                    $id=$_SESSION['user_data']['id'];
                    var_dump($_SESSION);

                    $stm = $connect->prepare("UPDATE `users` SET
                    `login` = :login, 
                    `name` = :name, 
                    `phone` = :phone, 
                    `password` = :password WHERE id = :id");

                    $stm->execute([
                        ':login'=>$_POST['login'],
                        ':name'=>$_POST['name'],
                        ':phone'=>$_POST['phone'],
                        ':password'=>$_POST['password'],
                        ':id'=>$id
                    ]);
                    $user_update = $stm->fetch();  

                    $stm = $connect->query("SELECT * FROM users WHERE id='$id'");
                    $result = $stm->fetch();
                    $_SESSION['user_data']=$result;

                        header('location:account.php?update=true');   
                }
                else {header('location:account.php?update=false');}

                break;
                case 'donate':
                    if (!empty($_POST['amount'])) {
                        $amount = intval($_POST['amount']);
                        // Обновляем сумму собранных средств для проекта
                        $stm = $connect->prepare("UPDATE project SET target_current = target_current + ? WHERE id = ?");
                        $stm->execute([$amount, $_GET['project']]);
                        
                        // Сохраняем информацию о пожертвовании
                        $stm = $connect->prepare("INSERT INTO donat (project_id, user_id, amount) 
                                                VALUES (?,?,?)");
                        
                        $stm->execute([
                            $_GET['project'],
                            $_SESSION['id_user'],
                            $amount
                        ]);
                        
                        // Перенаправляем на страницу благодарности
                        header('Location: projects.php?donate=true');
                    } else {
                        header('Location: projects.php?donate=fail');
                    }
                    break;            
}
?>
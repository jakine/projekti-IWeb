<?php
        session_start();
        require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';
        $email;
        $password;
        if(isset($_POST['loginBtn'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            if(validateEmptyData($email,$password)){
                header('Location:login.php');
            }else if(validateData($email,$password)){
                if($_SESSION['roli'] == 1){
                    header('Location: admin-dashboard.php');
                }else if($_SESSION['roli'] == 0){
                    header('Location: index.php');                    
                }
            }else if(!validateEmptyData($email, $password)){
                echo '<script>alert("Perdoruesi nuk ekziston ose te dhenat jane gabim!")</script>';
            }
        }

        function validateEmptyData($email, $password){
            if(empty($email) || empty($password)){
                return true;
            }
            return false;
        }

        function validateData($email,$password){
            $p = new ProductController;
            $users = $p->getUsers();

            foreach($users as $user){
                if($user['email'] == $email){
                    $_SESSION['emri'] = $user['emri'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['roli'] = $user['role'];
                    $_SESSION['id'] = $user['user_id'];
                    
                    return true;
                }
            }
            return false;
        }
?>
<a href="login.php">kthehu</a>
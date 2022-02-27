<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';



$menu = new ProductController();

if (isset($_POST['submit'])) {
    $e = false;
    $p = false;
    $n = false;
    $s = false;
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (validateData($email, $password)) {
        echo '<script>alert("perdoruesi ekziston, perdorni nje email tjeter")</script>';
    } else {
        //email
        if (empty($_POST['email'])) {
            echo '<div class="message">Email nuk duhet te jete i zbrazet</div><br>';
        } else {
            $email = $_POST['email'];
            if (!preg_match('/\w+@\w+\.[a-z]{2,3}|[a-z0-9]+@\w+\-\w+\.[a-z]{2,3}/', $email)) {
                echo '<div class="message">Email nuk eshte valid.</div><br>';
            }else{
                $e = true;
            }
        }
        //password
        if (empty($_POST['password'])) {
            echo '<div class="message">Password nuk duhet te jete i zbrazet</div><br>';
        } else {
            $password = $_POST['password'];
            if (!preg_match('/^\w+[a-z]+\d+$/', $password)) {
                echo '<div class="message">Password duhet te perfundoje me 1 ose me shume numra</div><br>';
            }else{
                $p = true;
            }
        }
        //name and surname

        if (empty($_POST['emri'])) {
            echo '<div class="message">Emri nuk duhet te jete i zbrazet</div><br>';
        } else {
            $emri = $_POST['emri'];
            if (!preg_match('/^\w{3,15}$/', $emri)) {
                echo '<div class="message">Emri duhet te jete me 3 karaktere ose me i gjate dhe duhet te filloje me shkronje te madhe</div><br>';
            }else{
                $n = true;
            }
        }

        if (empty($_POST['mbiemri'])) {
            echo '<div class="message">Mbiemri nuk duhet te jete i zbrazet</div><br>';
        } else {
            $mbiemri = $_POST['mbiemri'];
            if (!preg_match('/^\w{3,15}$/', $mbiemri)) {
                echo '<div class="message">Mbiemri duhet te jete me 3 karaktere ose me i gjate dhe duhet te filloje me shkronje te madhe</div><br>';
            }else{
                $s = true;
            }
        }

        if ($e && $p && $n && $s) {
            $menu->registerUser($_POST);
        }
    }
}

function validateData($email, $password)
{
    $p = new ProductController;
    $users = $p->getUsers();

    foreach ($users as $user) {
        if ($user['email'] == $email && $user['pwd'] == $password) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];

            return true;
        }
    }
    return false;
}
?>
<html lang="en">

<head>
    <title>sign-up</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/stylesingup.css">
    <style>
        .alert-danger-message {
            font-size: 12px;
            font-weight: bold;
            color: red;
        }

        .message {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 8px 12px;
            color: white;
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Regjistrohu</h1>
        <form method="post" action="" autocomplete="off">
            <div class="emri-div">
                <label>Emri</label><br>
                <input type="text" placeholder="Enter Name" id="emri" name="emri">
            </div>
            <div class="mbiemri-div">
                <label>Mbiemri</label><br>
                <input type="text" placeholder="Enter Surname" id="mbiemri" name="mbiemri">
            </div>
            <div class="email-div">
                <label>Email</label><br>
                <input type="email" placeholder="Enter Email" id="email" name="email">
            </div>
            <div class="password-div">
                <label>Fjalekalimi</label><br>
                <input type="text" placeholder="Enter Password" id="password" name="password">
            </div>
            <div class="birth-year" required>
                <label>Viti i Lindjes</label><br>
                <input type="date" name="birthday" id="birthday" min="1900-01-01" max="2003-12-31" required>
            </div>
            <div class="gender">
                <label for="gender">Gjinia:</label>
                <select name="gender" required>
                    <option selected></option>
                    <option>Femër</option>
                    <option>Mashkull</option>
                </select>
            </div>
            <button type="submit" id="submitBtn" name="submit">Regjistrohu</button>
        </form>
        <p>Jeni te regjistruar <a href="./login.php">Kyquni ketu</a></p>
    </div>
    <script src="../js/sign-up-parameters-validation.js"></script>
</body>

</html>
<html lang="en">
<head>
    <title>log-in</title>
    <link rel="stylesheet" href="../style/stylelogin.css">
    <link rel="stylesheet" href="../style/style.css">
    <!--linqet per font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        .alert-danger-message{
            font-size: 12px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <h1>Kyqu</h1>
        <form method="POST" action="loginValidation.php" autocomplete="off">
            <div class="email-div">
                <label>Email</label><br>
                <input type="email" placeholder="Enter Email" id="email" name="email"> 
            </div>
            <div class="password-div">
                <label>Fjalekalimi</label><br>
                <input type="text" placeholder="Enter Password" id="password" name="password"> 
            </div>
            
            <input type="submit" id="submitBtn" name="loginBtn" onclick="signInValidate()"></button>
        </form>
        <p>Nuk keni llogari <a href="./signup.php">Regjistrohu ketu</a></p>
    </div>
    <script src="../js/login-parameters-validation.js"></script>
</body>
</html>
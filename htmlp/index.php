<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';


if($_SESSION['email'] == '' && $_SESSION['password'] == ''){
    header('Location: login.php');
}
?>
<html>
    <head>

        <title>ecomerce</title>
		<link rel="stylesheet" href="../style/style.css">

        <!--Linqet per FONT-STYLE-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include "navbar.html" ?>
        <?php include "content.php" ?>
        
        <?php include "footer.html" ?>
        <script src="../js/main.js"></script>
        <script src="../js/admin.js"></script>
    </body>
</html>
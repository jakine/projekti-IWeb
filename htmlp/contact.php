<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';

$menu = new ProductController();
if(isset($_POST['submit'])){
    $menu->createMessage($_POST);
}
?>
<html>
<head>
    <style>
        body{
            background-color: aliceblue;
        }
        h1{
            text-align: center;
        }
        div form{
            width: 80%;
            height: 80vh;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form input{
            height: 32px;
        }
        form input, textarea{
            width: 80%;
            padding: 6px 4px;
        }
        form div{
            display: flex;
            width: 100%;
            align-items: center;
        }

        form div input{
            width: 60%;
            
        }

        form div div{
            display: flex;
            flex-direction: column;
            height: min-content;
        }
    </style>
</head>
<body>
    <h1>Na Kontakto</h1>
<div>
    <form action="" method="post" autocomplete="off">
        <div>
            <div>
            <label for="emri">Emri</label>
            <input type="text" name="emri">
            </div>
            <div>
            <label for="mbiemri">Mbiemri</label>
            <input type="text" name="mbiemri">
            </div>
        </div>
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="meshazhi">Mesazhi</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Dergo">
    </form>
</div>
</body>
</html>

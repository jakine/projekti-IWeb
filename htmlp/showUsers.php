<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';

$p = new ProductController;

$users = $p->getUsers();

foreach($users as $user){
    echo $user['role'];
}
?>
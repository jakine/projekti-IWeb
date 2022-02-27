<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';

if(isset($_GET['id'])){
    $produktiId = $_GET['id'];
}
$menu = new ProductController;
$menu->delete($produktiId);
?>
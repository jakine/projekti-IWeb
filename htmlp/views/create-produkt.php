<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';

$menu = new ProductController();
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}
?>
<div>
    <form action="" method="POST">
        Titulli:
        <input type="text" name="titulli">
        <br>
        Pershkrimi:
        <input type="text" name="pershkrimi"></textarea>
        <br>
        Image:
        <input type="file" name="img">
        <br>
        Cmimi:
        <input type="text" name="cmimi">
        <br>
        <label>Zgjedh Kategorine:</label>

        <select name="kategoria">
        <option value="no value"></option>
        <option value="food">food</option>
        <option value="clothes">clothes</option>
        <option value="technology">technology</option>
        <option value="accessories">accessories</option>
        <option value="tools">tools</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
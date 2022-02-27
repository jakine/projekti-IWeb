<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';

$menu = new ProductController();
if(isset($_GET['id'])){
    $produktiId = $_GET['id'];
}
$currentMenu = $menu->edit($produktiId);

if(isset($_POST['submit'])){
    $menu->update($_POST, $produktiId);
}

?>
<div>
    <form action="" method="POST">
        Titulli:
        <input type="text" name="titulli" value="<?php echo $currentMenu['titulli']?>">
        <br>
        Pershkrimi:
        <input type="text" name="pershkrimi" value="<?php echo $currentMenu['pershkrimi']?>"></textarea>
        <br>
        Image:
        <input type="file" name="img" value="<?php echo $currentMenu['img']?>">
        <br>
        Cmimi:
        <input type="text" name="cmimi" value="<?php echo $currentMenu['cmimi']?>">
        <br>
        <input type="submit" name="submit" value="Update" value="">
    </form>
</div>
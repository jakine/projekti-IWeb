<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';
?>
<html>
    <head>
        <title>KoalaShop Technology</title>
		<link rel="stylesheet" href="../style/style.css">

        <!--Linqet per FONT-STYLE-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style/content.css">
    </head>
    <body>
        <?php include "navbar.html" ?>
        
        <body>
    <div class="content-div">

        <div id="search-box-div">
            <input type="search" id="searchbox" placeholder="Search..."><i class="fas fa-search"></i>
        </div>

        <div class="categories-div stroke">
            <ul id="category-list">
                <li><img src="../img/food.png" alt="icon-img"><a href="./food-products.php">Ushqim</a></li>
                <li><img src="../img/clothing.png" alt="icon-img"><a href="./clothes-products.php">Veshje</a></li>
                <li><img src="../img/technology.png" alt="icon-img"><a href="./technology-products.php">Teknologji</a></li>
                <li><img src="../img/accessorias.png" alt="icon-img"><a href="./accessories-products.php">Aksesorë</a></li>
                <li><img src="../img/tools.png" alt="icon-img"><a href="./tools-products.php">Mjete Pune</a></li>
            </ul>
        </div>
        <div class="card-container-div">

            <!--Slider-->
            <div class="slider-container">
                <i class="fas fa-arrow-left" id="prev-btn"></i>
                <i class="fas fa-arrow-right" id="next-btn"></i>
                <div class="slide-div">
                    <img src="../img/sliderimg4.jpg" alt="" id="lastClone">
                    <img src="../img/sliderimg1.jpg" alt="">
                    <img src="../img/sliderimg2.jpg" alt="">
                    <img src="../img/sliderimg3.jpg" alt="">
                    <img src="../img/sliderimg4.jpg" alt="">
                    <img src="../img/sliderimg1.jpg" alt="" id="firstClone">
                </div>
            </div>
            <!--Slider-->
           <div class="centering-card-div">
                
                <?php 
                $m = new ProductController();
                $produktet = $m->readData();
                foreach($produktet as $produkti){
                        if($produkti['kategoria'] == 'technology'){
                            echo '<div class="card">';
                            echo '<div class="card-text-div"><h2>'.$produkti['titulli'].'</h2>';
                            echo '<p>'.$produkti['pershkrimi'].'</p></div>';
                            echo '<img src="../img/'.$produkti['img'].'" alt="'.$produkti['img'].'">';
                            echo '<h2>$'.$produkti['cmimi'].'</h2>';
                            echo '<button>Buy Now <i class="fas fa-shopping-cart"></i>.</button>';
                            echo '</div>';
                        }
                    }
                ?>
                
               
           </div>
        </div>
    </div>
    
</body>
        
        <?php include "footer.html" ?>
        <script src="../js/main.js"></script>
        <script src="../js/admin.js"></script>
    </body>
</html>
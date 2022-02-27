<?php
require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';
?>
<html lang="en">

<head>
    <title>Admin-Dashboard</title>
    <link rel="stylesheet" href="../style/admin-dashboard-style.css">

    <style>
        .table-container{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 26px;
            width: 60%;
            max-height: 80vh;
            overflow-y: scroll;
            max-height: 80vh;
        }

        table {
            border: 1px solid black;
            width: 100%;
        }

        thead {
            background-color: rgba(0, 0, 0, .1);
        }

        table td {
            text-align: center;
        }

        img {
            width: 60px;
            height: 60px;
            border: 1px solid black;
        }

        .messages-div{
            top: 100vh;
            border: 1px solid black;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 26px;
            width: 60%;
            max-height: 80vh;
            overflow-y: scroll;
            margin-top: 100px;
        }

        .message-container{
            border: 1px solid black;
        }

        .message-credits{
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>

<body>
    <?php include "./navbar.html" ?>
    <div>
        <a href="./views/create-produkt.php">Shto Produkt</a>
    </div>
    <div class="table-container">
    <table>
        <thead>
            <th>ID</th>
            <th>TITULLI</th>
            <th>PERSHKRIMI</th>
            <th>IMG</th>
            <th>CMIMI</th>
            <th colspan="2">ACTION</th>
            <th>Shtoi</th>
        </thead>
        <tbody>

            <?php
            $m = new ProductController();
            $produktet = $m->readData();
            foreach ($produktet as $produkti) :
            ?>
                <tr>
                    <td><?php echo $produkti['id']; ?></td>
                    <td><?php echo $produkti['titulli']; ?></td>
                    <td><?php echo $produkti['pershkrimi']; ?></td>
                    <td><img src="<?php echo $produkti['img']; ?>" alt=""></td>
                    <td><?php echo $produkti['cmimi']; ?></td>
                    <td><a href="http://localhost/projekti-IWeb/htmlp/views/edit-produkt.php?id=<?php echo $produkti['id'] ?>">edit</a></td>
                    <td><a href="http://localhost/projekti-IWeb/htmlp/views/delete-produkt.php?id=<?php echo $produkti['id'] ?>">delete</a></td>
                    <td><?php echo $produkti['admin_id'].' '.$produkti['admin_name'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="messages-div">
        <?php
        require_once 'C:\xampp\htdocs\projekti-IWeb\htmlp\controllers\ProductController.php';
        $m = new ProductController();
        $mesazhet = $m->getMessages();
        echo '<h1 style="text-align:center;">Mesazhet</h1>';
        foreach ($mesazhet as $mesazhi) {
            echo '<div class="message-container">';
            echo '<div class="message-credits"><h3>'.$mesazhi['emri'].' '.$mesazhi['mbiemri'].'</h3><h3>'.$mesazhi['email'].'</h3></div>';
            echo '<div><p>' . $mesazhi['mesazhi'] . '</p></div>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-image: url('../assets/img/image.jpg'); background-size:cover">

    <?php
    session_start();
    if (empty($_SESSION['login'] == 'masyarakat')) {
        header("location:../index.php");
    }
    include '../layouts/header.php';

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'tanggapan':
                include 'tanggapan.php';
                break;
            default:
                echo "halaman tidak tersedia";
                break;
        }
    } else {
        include 'home.php';
    }


    include '../layouts/footer.php';


    ?>

</body>

</html>
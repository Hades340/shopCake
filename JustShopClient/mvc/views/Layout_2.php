<!doctype html>
<html lang="en">

<head>
    <title>Just Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <!-- Bootstrap CSS -->
    <script src="/public/JS/jquery-3.4.1.min.js"></script>
    <script src="/public/JS/bootstrap.min.js"></script>
    <script src="/public/JS/action.js"></script>
</head>

<body style="background-image: url(/public/img/body.png); height: auto;">
    <!-- Start menu -->
    <?php require_once "./mvc/views/blocks/Menu_Top.php" ?>
    <!-- End menu -->
    <!-- Start body -->
    <?php require_once "./mvc/views/pages/".$data["Page"].".php"?>
    <!-- End body -->
    <!-- start footer -->
    <?php require_once "./mvc/views/blocks/Footer.php"?>
    <!-- end footter -->

</body>

</html>
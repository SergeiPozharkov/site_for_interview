<!-- Старт/продолжение сессии -->
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body id="position_1">
<!-- Страница с благодарностью за прохождение опроса пользователем -->
<div class="container" id="container_position">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <div class="alert alert-success" role="alert" id="danger">
                <h1><?= $_SESSION['username'] ?>, благодарим вас за прохождение опроса!</h1>
            </div>
            <br>
            <a href='../index.php' id="button_ok" class='btn btn-success'>Вернуться на главную страницу сайта</a>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>

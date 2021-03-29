<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="completed_login">
<!--Выводит сообщение об успешном входе и дает возможность пройти опрос-->
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <div class='alert alert-success' role='alert' id='danger'><h1><?= $_SESSION['username'] ?> Вы успешно вошли
                    !!!</h1></div>
            <a href="interview.php" class="btn btn-primary">Пройти опрос</a>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>
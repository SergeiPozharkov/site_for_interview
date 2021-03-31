<?php session_start(); //Старт/продолжение сессии?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="completed_login">
<!--Страница с сообщением об успешном входе и кнопкой для перехода к опросу-->
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <div class='alert alert-success' role='alert' id='danger'><h1>Здравствуйте <?= $_SESSION['username'] ?>, вы
                    успешно вошли !!!</h1></div>
            <a href="../survey_and_results/interview.php" class="btn btn-primary">Пройти опрос</a>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>
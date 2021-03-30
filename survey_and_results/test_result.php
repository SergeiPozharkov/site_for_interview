<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="test_result">
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">

            <?php

            $q11 = "1. Из какого вы города?";
            $q22 = "2. Ваш пол?";
            $q33 = "3. Ваш возраст?";
            $q44 = "4. Какой вы национальности?";
            $q55 = "5. Какое у вас вероисповедание?";

            $data = json_decode(file_get_contents("../data/data.json"), true);

            echo "<table border='2' class='table table-bordered border-primary'>";
            echo "<th colspan='5'>Вопросы и ответы</th><th>Имя пользователя</th>";
            foreach ($data as $row) {

                echo "<tr><td><b>$q11</b><br><i>$row[q1]</i></td><td><b>$q22</b><br><i>$row[q2]</i></td><td><b>$q33</b>
                <br><i>$row[q3]</i></td><td><b>$q44</b><br><i>$row[q4]</i></td><td><b>$q55</b><br><i>$row[q5]</i></td>
                <td><br><i>$row[username]</i></td></tr>";
            }
            echo "</table>";
            ?>

            <a id="test" class="btn btn-secondary" href="../index.php">Вернуться на главную страницу</a>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>
</body>
</html>
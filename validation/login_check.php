<?php

// Старт/продолжение сессии
session_start();
// Скрипт, проверяющий на соответствие введенных данных в форму авторизации с данными о зарегистрированных пользователях

if (empty($_POST["login"] || $_POST["login"] = "") || empty($_POST["pass"] || $_POST["pass"] = "") ||
    empty($_POST["name"] || $_POST["name"] = "")) {
    include "../include/include_header.php";
    echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Заполните все поля!!!</h1></div>";
    echo "<a href='../forms/login.html' class='btn btn-success'>Вернуться к форме авторизации</a>";
    include "../include/include_footer.php";
    exit();
}

$name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);

$userData = json_decode(file_get_contents("../data/user_data.json"), true);

foreach ($userData as $row) {

    if ($row['name'] == $name && $row['login'] == $login && $row['pass'] == $pass) {
        // Присвоение глобальной переменной $_SESSION имя пользователя, которое является идентификатором сессии
        $_SESSION['username'] = $name;
        header("Location: ../alerts/completed_login.php");
    } else {
        include "../include/include_header.php";
        echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Такой пользователь не существует !!!</h1>
        </div>";
        echo "<a href='../forms/login.html' class='btn btn-success'>Вернуться к форме авторизации</a>";
        include "../include/include_footer.php";
        exit();
    }

    if ($name == "Admin" && $login == "admin" && $pass == "admin") {

        header("Location: ../survey_and_results/test_result.php");
    } else {
        include "../include/include_header.php";
        echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Такой пользователь не существует !!!</h1>
        </div>";
        echo "<a href='../forms/login.html' class='btn btn-success'>Вернуться к форме авторизации</a>";
        include "../include/include_footer.php";
        exit();
    }
}
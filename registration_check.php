<?php

$name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);

if (strlen($name) < 2 || strlen($name) > 50) {
    include "include_header.php";
    echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Недопустимая длина имени</h1></div><br>";
    echo "<a class='btn btn-success' href='registration.html'>Вернуться к форме регистрации</a>";
    include "include_footer.php";
    exit();
} elseif (strlen($login) < 5 || strlen($login) > 50) {
    include "include_header.php";
    echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Недопустимая длина логина</h1></div>";
    echo "<a class='btn btn-success' href='registration.html'>Вернуться к форме регистрации</a>";
    include "include_footer.php";
    exit();
} elseif (strlen($pass) < 5 || strlen($pass) > 32) {
    include "include_header.php";
    echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Недопустимая длина пароля</h1></div>";
    echo "<a class='btn btn-success' href='registration.html'>Вернуться к форме регистрации</a>";
    include "include_footer.php";
    exit();
}

$userData = json_decode(file_get_contents("user_data.json"));
$userData[] = ['name' => $name, 'login' => $login, 'pass' => $pass];
file_put_contents("user_data.json", json_encode($userData));

header('Location: index.php');


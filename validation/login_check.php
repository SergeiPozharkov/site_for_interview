<?php

session_start();

if (empty($_POST["login"] || $_POST["login"] = "") || empty($_POST["pass"] || $_POST["pass"] = "") ||
    empty($_POST["name"] || $_POST["name"] = "")) {
    include "../include/include_header.php";
    echo "<div class='alert alert-danger' role='alert' id='danger'><h1>Такой пользователь не существует !!!</h1></div>";
    echo "<a href='../forms/login.html' class='btn btn-success'>Вернуться к форме входа</a>";
    include "../include/include_footer.php";
    exit();
}

$name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);

$data = json_decode(file_get_contents("../data/user_data.json"), true);

foreach ($data as $row) {

    if ($row['name'] == $name and $row['login'] == $login and $row['pass'] == $pass) {
        $_SESSION['username'] = $name;
        header("Location: ../alerts/completed_login.php");
    }

    if ($name == "Admin" and $login == "admin" and $pass == "admin") {

        header("Location: ../survey_and_results/test_result.php");
    }
}
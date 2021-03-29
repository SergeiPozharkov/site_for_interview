<?php

session_start();

if (!empty($_POST["q1"]) && !empty($_POST["q2"]) && !empty($_POST["q3"]) && !empty($_POST["q4"])
    && !empty($_POST["q5"])) {

    $data = json_decode(file_get_contents("data.json"), true);

    $data[] = ['q1' => $_POST["q1"], 'q2' => $_POST["q2"], 'q3' => $_POST["q3"], 'q4' => $_POST["q4"],
        'q5' => $_POST["q5"], 'username' => $_SESSION["username"]];

    file_put_contents("data.json", json_encode($data));

    header("Location: completed.php");
} else {
    header("Location: un_completed.php");

}
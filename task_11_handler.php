<?php
session_start();
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// die;

$pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");

if (isset($_POST['email'], $_POST['password']) && $_POST['email'] != '' && $_POST['password'] != '') {

    // echo '<h1>Ok</h1>';
    // die;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_sql = password_hash($password, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM `userstask` WHERE `email` LIKE :email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($result);
    // echo '</pre>';
    // die;

    if ($result == null) {
        echo '<h1>Пусто</h1>';
        $sql = "INSERT INTO `userstask` (`email`, `password`) VALUES (:email, :password)";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email, 'password' => $password_sql]);
        $message = 'Пользователь зарегестрирован';
        $_SESSION['$message'][] = $message;
        $_SESSION['$message'][] = true;
    } else {
        $message = 'Пользователь с данным email уже существует';
        $_SESSION['$message'][] = $message;
        $_SESSION['$message'][] = false;
    }
} else {
    $message = 'Заполните все поля';
    $_SESSION['$message'][] = $message;
    $_SESSION['$message'][] = false;
}

header("location: /marlin/task_11.php");

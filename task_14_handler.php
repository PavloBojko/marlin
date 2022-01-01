<?php
session_start();
echo '<pre>';
var_dump($_POST);
echo '<pre>';

$pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");

if (isset($_POST['email'], $_POST['password']) && $_POST['email'] != '' && $_POST['password'] != '') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `userstask` WHERE `email` LIKE :email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($result != null) {
        $hash = $result[0]["password"];

        if (password_verify($password, $hash)) {
            $message = 'Вы успешно пройшли авторизацию';
            echo $message;
            $_SESSION['user']['email'] = $email;
        } else {
            $message = 'Неправильно введен пароль';
            echo $message;
        }
        echo "user ok";
    } else {
        $message = 'Неправильно введен логин или пароль';
        echo $message;
    }

    $_SESSION['message'] = $message;

    var_dump($_SESSION);
}

header("location: /marlin/task_14.php");


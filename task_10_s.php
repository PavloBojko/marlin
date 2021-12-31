<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");

if (isset($_POST['text']) && $_POST['text'] != '') {
    echo '<h1>Ok</h1>';
    $text = $_POST['text'];
    $sql = "SELECT * FROM `task_9` WHERE `text` LIKE :text";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($result == null) {
        echo '<h1>Пусто</h1>';
        $sql = "INSERT INTO task_9 (text) VALUES (:text)";
        $statement = $pdo->prepare($sql);
        $statement->execute(['text' => $text]);
        $message = 'Запись добавлена';
        $_SESSION['$message'][] = $message;
        $_SESSION['$message'][] = true;
    } else {
        $message = 'Введенная запись уже существует';
        $_SESSION['$message'][] = $message;
        $_SESSION['$message'][] = false;
    }
} else {
    $message = 'Поле не может быть пустым';
    $_SESSION['$message'][] = $message;
    $_SESSION['$message'][] = false;
}
header("location: /marlin/task_10.php");

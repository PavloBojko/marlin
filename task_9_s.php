<?php
$text = $_POST['text'];


$pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");
$sql = "INSERT INTO task_9 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("location: /marlin/task_9.php");

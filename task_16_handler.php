<?php
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

$type = pathinfo($_FILES['imge']['name'], PATHINFO_EXTENSION);
$filName = uniqid();
$way = "./img/tasks/{$filName}.$type";
$tmp = $_FILES['imge']['tmp_name'];
move_uploaded_file($tmp, $way);

$pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");
$sql="INSERT INTO `images` (`image`) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement -> execute(['text'=>$way]);
header("location: /marlin/task_16.php");
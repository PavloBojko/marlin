<?php
 $pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");
if ($_FILES!=null) {
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    $type = pathinfo($_FILES['imge']['name'], PATHINFO_EXTENSION);
    $filName = uniqid();
    $way = "img/tasks/{$filName}.$type";
    $tmp = $_FILES['imge']['tmp_name'];
    move_uploaded_file($tmp, $way);
   
    $sql = "INSERT INTO `images` (`image`) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $way]);
}
if (isset($_GET['id'], $_GET['src'])) {
    $id=$_GET['id'];
    $file=$_GET['src'];
    unlink($file);
    $sql = 'DELETE FROM `images` WHERE `images`.`id` = :id';
    $statement = $pdo->prepare($sql);
    $statement->execute(['id' => $id]);
}
header("location: /marlin/task_17.php");

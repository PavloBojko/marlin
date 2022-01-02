<?php
echo '<pre>';
var_dump($_FILES);
echo '</pre>';
// $pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");

// $type = pathinfo($_FILES['imge']['name'], PATHINFO_EXTENSION);
// $filName = uniqid();
// $way = "img/tasks/{$filName}.$type";
// $tmp = $_FILES['imge']['tmp_name'];
// move_uploaded_file($tmp, $way);


// $sql = "INSERT INTO `images` (`image`) VALUES (:text)";
// $statement = $pdo->prepare($sql);
// $statement->execute(['text' => $way]);

function upload($tmp, $name)
{

    $typ = pathinfo($name, PATHINFO_EXTENSION);
    $filName = uniqid();
    $way = "img/tasks/{$filName}.$typ";
    move_uploaded_file($tmp, $way);

    $pdo = new PDO("mysql:host=localhost;dbname=marlin", "root", "");
    $sql = "INSERT INTO `images` (`image`) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $way]);
}
$count = count($_FILES['imge']['name']);
for ($i = 0; $i < $count; $i++) {
    upload($_FILES['imge']['tmp_name'][$i], $_FILES['imge']['name'][$i]);
}
header("location: /marlin/task_18.php");

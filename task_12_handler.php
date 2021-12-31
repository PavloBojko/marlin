<?php
session_start();
if (isset($_POST['add_messege'])) {
    $add_messege = $_POST['add_messege'];
    $_SESSION['addmessege'][] = $add_messege;
}
header('location: /marlin/task_12.php');
?>
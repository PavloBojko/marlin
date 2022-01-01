<?php
session_start();

if (isset($_GET['count']) && $_GET['count'] == 1) {
    if (isset($_SESSION['count'])) {
        $_SESSION['count']++;
    } else {
        $_SESSION['count'] = 1;
        header('location: /marlin/task_13.php');
    }
    echo 'if';
    echo '<pre>';
    var_dump($_SESSION['count']);
    echo '/pre';
    // $count = $_SESSION['count'];
}
header('location: /marlin/task_13.php');

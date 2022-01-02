<?php
session_start();
function outUser()
{
    session_unset();
    header("location: /marlin/task_14.php");
}
outUser();
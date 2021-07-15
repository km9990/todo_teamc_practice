<?php

    require_once('./Models/Task.php');

    $id = $_POST['id'];

    $task = new Task();
    $task->delete([$id]);

    header("location: index.php");
    exit;

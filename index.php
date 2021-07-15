<?php

// DB接続

require_once('./Models/Task.php');

// ファイルの読み込み
$task = new Task();
$tasks = $task->getAll();


?>

<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
 <head>


 <body>
  <div class="container-fulid">
    <header>
        <div class="header-left">
            <a href="./index.php" class="headline">Todo_team</a>
        </div>
        <div class="header-right">
            <ul class="header-content">
                <li class="nav-item">
                    <a href="./create.php" class="nav-link">Create</a>
                </li>
                <li class="nav-item">
                    <a href="./index.php" class="nav-link">Sing in</a>
                </li>
                <li class="nav-item">
                    <a href="./index.php" class="nav-link">Sing out</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline">
                        <input class="form" type="search" placeholder="Search" aria-label="Search" name="title">
                        <button class="btn-outline" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </header>

    <div class="main">
        <?php foreach($tasks as $task): ?>
        <div class="main-content">
            <div class="main-content-card">
                <img src="#" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?= $task["title"]; ?> </h5>
                    
                    <p class="card-text">
                        <?= $task["contents"];?>
                    </p>
                    <div class="card-text-right">
                        <a href="edit.php?id=<?= $task['id']; ?>" class="btn text-success">EDIT</a>
                        <form action="delete.php" method="post">

                            <input type="hidden" name="id" value="<?= $task['id']; ?>">
                            <button type="submit" class="btn text-danger">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>

 </body>
</html>
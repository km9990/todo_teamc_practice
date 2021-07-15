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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plaster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chathura&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <head>


 <body>
  <div class="container-fulid">
    <header>
        <div class="header-left">
            <a href="./index.php" class="headline">Todo_teamC</a>
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
                        <button class="btn-outline" type="submit">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        </button>
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
                    <div class="card-content">
                    <h5 class="card-title"> <?= $task["title"]; ?> </h5>
                    
                    <p class="card-text">
                        <?= $task["contents"];?>
                    </p>
                    </div>
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
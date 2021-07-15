<?php
require_once('./Models/Task.php');

$id = $_GET['id'];
$task = new Task();
$task = $task->findById($id);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集 | Todoアプリ</title>
    <link rel="stylesheet" href="./style2.css">
</head>
<body>
<div class="container-fulid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-dark bg-dark">
                    <a href="index.php" class="navbar-brand">Todo</a>
                </nav>
            </div>
        </div>

        <div class="main">
            <div class="main-content">
                <form action="update.php" method="post">
                    <div class="form-group">
                        <h2 class="title">Title</h2>
                        <input type="text" class="form-control" name="title" id="title" value="<?= $task['title']; ?>">
                    </div>
                    <div class="form-group">
                        <h2 class="contents">Contents</h2>
                        <textarea class="form-control" name="contents" id="contents" cols="30" rows="10"><?= $task['contents'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <div class="file">
                            <input type="file" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>


                    <!-- 送信の記述 -->
                    <input type="hidden" name="id" value="<?= $task['id']; ?>">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>
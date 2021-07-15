<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container-fuild">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark">
                <a href="index.php" class="navbar-brand">Todo</a>
        </div>
    </div>

    <div class="row mt-4 px-4">
        <div class="col-12">
            <form action="store.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="contents">Contents</label>
                    <textarea class="form-control" name="contents" id="contents" cols="30" rows="10"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">POST</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>
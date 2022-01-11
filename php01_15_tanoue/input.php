<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>課題</title>
</head>

<body>
    <h1 class="title">アンケートフォーム</h1>
    <div class="m-1">
        <form action="write.php" method="post" class="table table-striped">
           
            <p>お名前: <input type="text" name="name"></p>
            <p>性別: <input type="radio" name="gender" value="men" checked="checked">男性
                <input type="radio" name="gender" value="woman">女性
            </p>
            <p>Email: <input type="text" name="mail"></p>
            <p>好きな食べ物: <input type="text" name="love"></p>
            <p>好きな映画: <input type="text" name="movie"></p>
            <p>好きな本: <input type="text" name="book"></p>
            <input type="submit" value="送信" class="btn btn-primary mb-2">
        </form>
        <a href='read.php'>書き込み内容をCK！</a>
    </div>
</body>

</html>

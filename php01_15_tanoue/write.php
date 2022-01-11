<?php
function h($s)
{
    // エラー対処する
    return htmlspecialchars($s, ENT_QUOTES);
}
$name = h($_POST['name']);
$gender = h($_POST['gender']);
$mail=h($_POST['mail']);
$love = h($_POST['love']);
$movie=h($_POST['movie']);
$book=h($_POST['book']);

$time = date('Y/m/d H:i:s');
// ファイルの文字列を作成するー

$str = $time . ',' . $name . ',' . $gender . ',' . $mail. ',' . $love. ',' . $movie. ',' . $book;

$file = fopen('./data/data.txt', 'a');    
fwrite($file, $str . "\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>インプットデータ書き込み</title>
</head>

<body>
    <p>書き込みDone！</p>
  
    <p>時間: <?= $time ?> </p>
    <p>名前: <?= $name ?> </p>
    <p>性別: <?= $gender ?> </p>
    <p>Email: <?= $mail ?> </p>
    <p>好きな食べもの: <?= $love ?> </p>
    <p>好きな映画: <?= $movie ?> </p>
    <p>好きな本: <?= $book ?> </p>
    <a href='read.php'>確認はこちら</a>
    <br>
    <a href='input.php'>戻る</a>
</body>

</html>

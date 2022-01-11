<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>アンケートリスト</title>
</head>

<body>

    <?php
    // ファイルを開く
    $openFile = fopen('data/data.txt', 'r');

    
    echo '<div class="w-75">';
    echo '<table class="table">';
    echo '<thead class="thead-light">';
    echo '<tr>';
    echo '<th class="col-xs-2">日付</th><th class="col-xs-2">名前</th>';
    echo '<th class="col-xs-2">性別</th><th class="col-xs-2">Email</th>';
    echo '<th class="col-xs-2">好きな食べ物</th><th class="col-xs-2">好きな映画</th>';
    echo '<th class="col-xs-2">好きな本</th>';
    echo '</tr>';
    while ($str = fgets($openFile)) {
      
        $newStr = explode(',', $str);
        echo '<tr>';

       
        foreach ($newStr as $key => $val) {
            // $valは使わない
            echo '<td>' . $newStr[$key] . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
    // ファイルを閉じる
    fclose($openFile);
    ?>
    <a href="input.php">書き込みをCK！
    </a>
</body>

</html>

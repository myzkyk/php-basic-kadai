<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
// 独自ソート関数：TRUEなら昇順、TRUEでなければ降順
function sort_2way(array $arr, bool $isAsc): void {
    if ($isAsc === true) {
        sort($arr); // 昇順
        echo "昇順ソートします。<br>";
    } else {
        rsort($arr); // 降順
        echo "降順ソートします。<br>";
    }

    // 1行ずつ表示（<br>で改行）
    foreach ($arr as $v) {
        echo $v . "<br>";
    }
}

// 課題指定の配列
$numbers = [15, 4, 18, 23, 10];

// 昇順（TRUE）
sort_2way($numbers, true);
echo "<br>";

// 降順（FALSE）
sort_2way($numbers, false);
    
?>
</p>
</body>

</html>
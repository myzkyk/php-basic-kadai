<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
// 独自のソート関数を定義
function sort_2way($array, $order) {
    // 昇順 or 降順を判定
    if ($order === "ASC") {
        sort($array); // 昇順
    } elseif ($order === "DESC") {
        rsort($array); // 降順
    } else {
        echo "ソートの順序指定が不正です。ASC または DESC を指定してください。<br>";
        return;
    }

    // 配列を出力（<br>で改行）
    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

// テスト用配列
$numbers = array(10, 3, 5, 7, 15, 2, 8);

// 昇順ソート
echo "昇順ソートします。<br>";
sort_2way($numbers, "ASC");

echo "<br>";

// 降順ソート
echo "降順ソートします。<br>";
sort_2way($numbers, "DESC");
?>

    </p>
</body>

</html>
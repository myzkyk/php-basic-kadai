<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $numbers = array(10, 3, 5, 7, 15, 2, 8);


        sort($numbers);


        echo "昇順ソートします。\n";
        foreach ($numbers as $number) {
        echo $number . "\n";
        }

        echo "\n"; 


        rsort($numbers);

        echo "降順ソートします。\n";
        foreach ($numbers as $number) {
       echo $number . "\n";
        }
        ?>
    </p>
</body>

</html>
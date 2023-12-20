<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数に値を代入
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 合計点数を変数に代入
        $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        // 平均点数を変数に代入
        $average_score = $total_score / 10;

        // 合計点数と平均点数を出力
        echo '合計点数:' . $total_score;
        echo '<br>';
        echo '平均点数:' . $average_score;

        // 配列を使うパターン
        echo '<br>';
        echo '<br>';
        echo '※配列を使うパターン';
        echo '<br>';
        $score_array = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
        $array_total = array_sum($score_array);
        $array_average = $array_total / count($score_array);
        echo '合計点数:' . $array_total;
        echo '<br>';
        echo '平均点数:' . $array_average;
        ?>
    </p>
</body>
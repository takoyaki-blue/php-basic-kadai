<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <p>
        <?php
        // 連想配列にデータを代入
        $onion = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // キーと値を順番に出力
        foreach ($onion as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
 </body>
 
 </html>
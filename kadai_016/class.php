<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスFoodを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // メソッドを定義する
            public function show_price(int $price) {
                $this->price = $price;
                echo $price . '<br>';
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        //  クラスAnimalを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function show_height(int $height) {
                $this->height = $height;
                echo $height . '<br>';
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        $food->show_price(250);
        $animal->show_height(60);
        ?>
    </p>
</body>
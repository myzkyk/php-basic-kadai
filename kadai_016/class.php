<?php

class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price . "<br>";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height . "<br>";
    }
}

$food = new Food("ハンバーガー", 500);
$animal = new Animal("キリン", 500, 900);

print_r($food);
print_r($animal);

$food->show_price();
$animal->show_height();

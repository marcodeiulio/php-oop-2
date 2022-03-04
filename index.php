<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/FoodArticles.php';


$dog_food = new FoodArticles(5, 'Chicken');
var_dump($dog_food);
echo '<br />';
$cat_food = new FoodArticles(3, 'Fish');
var_dump($cat_food);

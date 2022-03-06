<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Customer.php';
require_once __DIR__ . '/models/FoodArticles.php';
require_once __DIR__ . '/models/CreditCard.php';

//# Set FoodArticles
$dog_food = new FoodArticles(5, 'Chicken');
$cat_food = new FoodArticles(3, 'Fish');

//# Set Customers
$marco = new Customer('Marco', true);
$marco->setCreditCard(600, 2024, 134984);

var_dump($marco);
echo $marco->introduce();

$marco->addToCart(1, 3);

var_dump($new_customer);

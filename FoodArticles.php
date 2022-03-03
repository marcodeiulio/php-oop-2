<?php
require_once __DIR__ . '/PetShop.php';

class FoodArticles extends PetShop
{
	public $quantity;
	public $price;

	public function __construct($quantity, $price)
	{
		$this->quantity = $quantity;
		$this->price = $price;
	}
}

$dog_food = new FoodArticles(45, 3.90);
$cat_food = new FoodArticles(30, 3.90);

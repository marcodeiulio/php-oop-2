<?php
require_once __DIR__ . '/Product.php';

class FoodArticles extends Product
{
	public $primary_ingredient;
	public $weight;

	public function __construct($weight, $primary_ingredient)
	{
		$this->weight = $weight;
		$this->primary_ingredient = $primary_ingredient;
	}
}

<?php
require_once __DIR__ . '/Product.php';

class FoodArticles extends Product
{
	public $primary_ingredient;

	public function __construct($primary_ingredient)
	{
		$this->primary_ingredient = $primary_ingredient;
	}
}

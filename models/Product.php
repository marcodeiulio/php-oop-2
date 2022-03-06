<?php
class Product
{
	public $price; //price per unit or KG
	public $stock; //units or KGs
	public $product_id;
	public $quantity; //the quantity the customer chose to buy

	public function __construct($price, $stock, $product_id, $quantity)
	{
		$this->price = $price;
		$this->stock = $stock;
		$this->product_id = $product_id;
		$this->quantity = $quantity;
	}
}

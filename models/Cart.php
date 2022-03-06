<?php
trait Cart
{
	public $owner;
	public $products = [];
	public $discount = 0;

	public function addToCart($product_id, $quantity)
	{
		for ($i = 0; $i < $quantity; $i++) {
			$products = $product_id;
		}
	}
}

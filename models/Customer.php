<?php
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Cart.php';

class Customer
{

	use CreditCard;
	use Cart;

	public $name;
	public $subscription;

	public function __construct($name, $subscription = false)
	{
		$this->name = $name;
		$this->subscription = $subscription;
	}

	public function introduce()
	{
		return 'Hi! I\'m ' . $this->name . '!';
	}
}

$new_customer = new Customer('Giannino');
$loyal_customer = new Customer('Carletto', true);

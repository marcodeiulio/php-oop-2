<?php
class Customer
{
	public $money;
	public $subscription;

	public function __construct($money, $subscription)
	{
		$this->money = $money;
		$this->subscription = $subscription;
	}
}

$new_customer = new Customer(25, false);
$loyal_customer = new Customer(15, true);

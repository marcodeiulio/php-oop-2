<?php trait CreditCard
{
	public $balance = 0;
	public $exp_date;
	public $card_number;

	public function setCreditCard($balance, $exp_date, $card_number)
	{
		$this->balance = $balance;
		$this->exp_date = $exp_date;
		$this->card_number = $card_number;
	}

	public function getCreditCard()
	{
		return "$this->balance $this->exp_date $this->card_number";
	}

	public function setBalance($balance)
	{
		$this->balance = $balance;
		return $this;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function setExpDate($exp_date)
	{
		$this->exp_date = $exp_date;
		return $this;
	}

	public function getExpDate($exp_date)
	{
		return $this->exp_date;
	}

	public function setCardNumber($card_number)
	{
		$this->card_number = $card_number;
		return $this;
	}

	public function getCardNumber($card_number)
	{
		return $this->card_number;
	}
}

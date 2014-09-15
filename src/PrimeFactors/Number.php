<?php

namespace Tdd\PrimeFactors;

class Number
{
	private $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function isPrime()
	{
		$value = $this->getValue();
		for ($i = 2; $i <= floor(sqrt($value)); $i++)
		{
			if ($value % $i == 0)
			{
				return false;
			}
		}

		return true;
	}

	public function getPrimeFactors()
	{
		$value = $this->getValue();
		for ($i = 2; $i <= floor(sqrt($value)); $i++)
		{
			if ($value % $i == 0)
			{
				$newNumber = new Number($value / $i);
				return array_merge(array($i), $newNumber->getPrimeFactors());
			}
		}

		return array($value);
	}

}
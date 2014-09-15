<?php

namespace Tdd\Test\PrimeFactors;

use Tdd\PrimeFactors\Number;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
	public function testGetValue()
	{
		$value = 5;
		$number = new Number(5);
		$this->assertEquals($value, $number->getValue());

		$value = 13;
		$number = new Number(13);
		$this->assertEquals($value, $number->getValue());
	}

	public function testIsPrime()
	{
		$number = new Number(5);
		$this->assertEquals(true, $number->isPrime());

		$number = new Number(6);
		$this->assertEquals(false, $number->isPrime());
	}

	public function testGetPrimeFactors()
	{
		$number = new Number(2);
		$this->assertEquals(array(2), $number->getPrimeFactors());

		$number = new Number(3);
		$this->assertEquals(array(3), $number->getPrimeFactors());

		$number = new Number(4);
		$this->assertEquals(array(2, 2), $number->getPrimeFactors());

		$number = new Number(6);
		$this->assertEquals(array(2, 3), $number->getPrimeFactors());

		$number = new Number(9);
		$this->assertEquals(array(3, 3), $number->getPrimeFactors());

		$number = new Number(12);
		$this->assertEquals(array(2, 2, 3), $number->getPrimeFactors());

		$number = new Number(15);
		$this->assertEquals(array(3, 5), $number->getPrimeFactors());
	}
}
 
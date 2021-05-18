<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	

	public function testFullNameIsReturned()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Mitu');

		$user->setLastName('Khan');

		$this->assertEquals($user->getFullName(), 'Mitu Khan');
	}

	public function testFirstAndLastNameAreTrimmed()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Mitu     ');

		$user->setLastName('      Khan');

		$this->assertEquals($user->getFirstName(), 'Mitu');

		$this->assertEquals($user->getLastName(), 'Khan');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('mitu@codecourse.com');

		$this->assertEquals($user->getEmail(), 'mitu@codecourse.com');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setFirstName('mitu');

		$user->setLastName('khan');

		$user->setEmail('mitu@codecourse.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'mitu khan');
		$this->assertEquals($emailVariables['email'], 'mitu@codecourse.com');
	}
     public fuction testGender()
	{
	   $this->user->setGender('female');
	   $this->assertEquals($this->user-> getGender(),'female') 
    } 
	
}
<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
	/** @test */
	public function testIsAndra()
	{
		$this->visit('nama')
				->see('Andra')
				->dontsee('Indra');
	}


	public function testLink()
	{
		$this->visit('social')
				->click('FACEBOOK')
         		->seePageIs('https://www.facebook.com/');

        $this->visit('social')
				->click('TWITTER')
         		->seePageIs('https://twitter.com/');

        $this->visit('social')
				->click('INSTAGRAM')
         		->seePageIs('https://www.instagram.com/');
	}

	public function testHasName()
    {
    	$this->seeInDatabase('costumers', ['Nomor' => '666']);
    }
}
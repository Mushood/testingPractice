<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RomanTest extends TestCase
{
    public function testRoman_1()
    {
      $response = $this->get('/roman/1');
      $response->assertSee("I");
    }

    public function testRoman_2()
    {
      $response = $this->get('/roman/2');
      $response->assertSee("II");
    }

    public function testRoman_3()
    {
      $response = $this->get('/roman/3');
      $response->assertSee("III");
    }

    public function testRoman_4()
    {
      $response = $this->get('/roman/4');
      $response->assertSee("IV");
    }

    public function testRoman_5()
    {
      $response = $this->get('/roman/5');
      $response->assertSee("V");
    }

    public function testRoman_6()
    {
      $response = $this->get('/roman/6');
      $response->assertSee("VI");
    }

    public function testRoman_7()
    {
      $response = $this->get('/roman/7');
      $response->assertSee("VII");
    }

    public function testRoman_8()
    {
      $response = $this->get('/roman/8');
      $response->assertSee("VIII");
    }

    public function testRoman_9()
    {
      $response = $this->get('/roman/9');
      $response->assertSee("IX");
    }

    public function testRoman_10()
    {
      $response = $this->get('/roman/10');
      $response->assertSee("X");
    }

    public function testRoman_11()
    {
      $response = $this->get('/roman/11');
      $response->assertSee("XI");
    }

    public function testRoman_12()
    {
      $response = $this->get('/roman/12');
      $response->assertSee("XII");
    }

    public function testRoman_13()
    {
      $response = $this->get('/roman/13');
      $response->assertSee("XIII");
    }

    public function testRoman_14()
    {
      $response = $this->get('/roman/14');
      $response->assertSee("XIV");
    }

    public function testRoman_15()
    {
      $response = $this->get('/roman/15');
      $response->assertSee("XV");
    }

    public function testRoman_16()
    {
      $response = $this->get('/roman/16');
      $response->assertSee("XVI");
    }

    public function testRoman_17()
    {
      $response = $this->get('/roman/17');
      $response->assertSee("XVII");
    }

    public function testRoman_18()
    {
      $response = $this->get('/roman/18');
      $response->assertSee("XVIII");
    }

    public function testRoman_19()
    {
      $response = $this->get('/roman/19');
      $response->assertSee("XIX");
    }

    public function testRoman_39()
    {
      $response = $this->get('/roman/39');
      $response->assertSee("XXXIX");
    }

    public function testRoman_40()
    {
      $response = $this->get('/roman/40');
      $response->assertSee("Error: Number cannot be greater than 39");
    }

}

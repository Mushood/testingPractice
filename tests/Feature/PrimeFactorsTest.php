<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PrimeFactorsTest extends TestCase
{
    public function testPrime_1()
    {
      $response = $this->get('/primeFactor/1');

      $response->assertSee("[]");
    }

    public function testPrime_2()
    {
      $response = $this->get('/primeFactor/2');

      $response->assertSee("[2]");
    }

    public function testPrime_3()
    {
      $response = $this->get('/primeFactor/3');

      $response->assertSee("[3]");
    }

    public function testPrime_4()
    {
      $response = $this->get('/primeFactor/4');

      $response->assertSee("[2,2]");
    }

    public function testPrime_5()
    {
      $response = $this->get('/primeFactor/5');

      $response->assertSee("[5]");
    }

    public function testPrime_6()
    {
      $response = $this->get('/primeFactor/6');

      $response->assertSee("[2,3]");
    }

    public function testPrime_7()
    {
      $response = $this->get('/primeFactor/7');

      $response->assertSee("[7]");
    }

    public function testPrime_8()
    {
      $response = $this->get('/primeFactor/8');

      $response->assertSee("[2,2,2]");
    }

    public function testPrime_9()
    {
      $response = $this->get('/primeFactor/9');

      $response->assertSee("[3,3]");
    }

    public function testPrime_10()
    {
      $response = $this->get('/primeFactor/10');

      $response->assertSee("[2,5]");
    }

    public function testPrime_15()
    {
      $response = $this->get('/primeFactor/15');

      $response->assertSee("[3,5]");
    }

    public function testPrime_100()
    {
      $response = $this->get('/primeFactor/100');

      $response->assertSee("[2,2,5,5]");
    }

}

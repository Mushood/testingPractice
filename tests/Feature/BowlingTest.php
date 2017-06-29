<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BowlingTest extends TestCase
{
  public function testBowling_all_gutter()
  {
    $response = $this->get('/bowling/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/-,-/-,-');

    $response->assertSee("0");
  }

  public function testBowling_normal_game_no_spare_no_strike()
  {
    $response = $this->get('/bowling/1,2/4,5/0,0/2,0/0,4/0,6/0,7/0,0/9,0/0,9/-,-/-,-');

    $response->assertSee("49");
  }

  public function testBowling_normal_game_one_spare_no_strike()
  {
    $response = $this->get('/bowling/8,2/3,2/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/-,-/-,-');

    $response->assertSee("20");
  }

  public function testBowling_normal_game_two_spare_no_strike()
  {
    $response = $this->get('/bowling/8,2/3,2/0,0/0,0/0,0/0,0/8,2/3,2/0,0/0,0/-,-/-,-');

    $response->assertSee("40");
  }

  public function testBowling_normal_game_no_spare_one_strike()
  {
    $response = $this->get('/bowling/10,-/3,2/3,2/0,0/0,0/0,0/0,0/0,0/0,0/0,0/-,-/-,-');

    $response->assertSee("30");
  }

  public function testBowling_normal_game_no_spare_two_strike()
  {
    $response = $this->get('/bowling/10,-/3,2/3,2/0,0/0,0/0,0/10,-/3,2/3,2/0,0/-,-/-,-');

    $response->assertSee("60");
  }

  public function testBowling_normal_game_no_spare_two_strike_consecutive()
  {
    $response = $this->get('/bowling/10,-/10,-/3,2/2,3/0,0/0,0/0,0/0,0/0,0/0,0/-,-/-,-');

    $response->assertSee("55");
  }

  public function testBowling_normal_game_one_spare_one_strike()
  {
    $response = $this->get('/bowling/10,-/3,2/3,2/0,0/0,0/8,2/3,2/0,0/0,0/0,0/-,-/-,-');

    $response->assertSee("50");
  }

  public function testBowling_normal_game_one_spare_ending()
  {
    $response = $this->get('/bowling/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/8,2/3,-/-,-');

    $response->assertSee("13");
  }

  public function testBowling_normal_game_one_spare_one_strike_ending()
  {
    $response = $this->get('/bowling/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/8,2/10,-/-,-');

    $response->assertSee("20");
  }

  public function testBowling_normal_game_one_strike_ending()
  {
    $response = $this->get('/bowling/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/10,-/8,-/-,-');

    $response->assertSee("18");
  }

  public function testBowling_normal_game_two_strike_ending()
  {
    $response = $this->get('/bowling/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/10,-/10,-/5,-');

    $response->assertSee("25");
  }

  public function testBowling_normal_game_three_strike_ending()
  {
    $response = $this->get('/bowling/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/0,0/10,-/10,-/10,-');

    $response->assertSee("30");
  }

  public function testBowling_perfect_game()
  {
    $response = $this->get('/bowling/10,-/10,-/10,-/10,-/10,-/10,-/10,-/10,-/10,-/10,-/10,-/10,-');

    $response->assertSee("300");
  }
}

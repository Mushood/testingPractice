<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BowlingController extends Controller
{
  public function play($frame1,$frame2,$frame3,$frame4,$frame5,$frame6,$frame7,$frame8,$frame9,$frame10,$frame11,$frame12){

    $game = [$frame1,$frame2,$frame3,$frame4,$frame5,$frame6,$frame7,$frame8,$frame9,$frame10,$frame11,$frame12];
    $score = 0;
    foreach ($game as $key => $frame) {
      $rolls = $this->getIndividualRollsFromFrame($frame);

      if($this->isStrike($rolls)){
        $score += $this->totalPins($rolls);
        $score += $this->plusTwoMoreFrames($game, $key);
        continue;
      }

      if($this->isSpare($rolls)){
        $score += $this->totalPins($rolls);
        $score += $this->plusOneMoreFrame($game, $key);
        continue;
      }

      $score += $this->totalPins($rolls);
    }
    return $score;
  }

  private function isStrike($rolls){
    if($this->totalPins($rolls) == 10 && $rolls[0] == 10){
      return true;
    }

    return false;
  }

  private function isSpare($rolls){
    if($this->totalPins($rolls) == 10 && $rolls[0] != 10){
      return true;
    }

    return false;
  }

  private function totalPins($rolls){
    $score = 0;
    foreach ($rolls as $index => $roll) {
      if($roll != "-"){
        $score += $roll;
      }
    }
    return $score;
  }

  private function getIndividualRollsFromFrame($frame){
    return explode(',',$frame);
  }

  private function plusTwoMoreFrames($game, $key){
    $score = 0;
    if(isset($game[$key+1]) && $key != 10 && $key != 9){
      $score += $this->addFrame($game[$key+1]);
    }

    if(isset($game[$key+2]) && $key != 9){
      $score += $this->addFrame($game[$key+2]);
    }
    return $score;
  }

  private function plusOneMoreFrame($game, $key){
    $score = 0;
    if(isset($game[$key+1]) && $key != 9){
      $score += $this->addFrame($game[$key+1]);
    }
    return $score;
  }

  private function addFrame($nextframe){
    $score = 0;
    $score += $this->totalPins($this->getIndividualRollsFromFrame($nextframe));
    return $score;
  }
}

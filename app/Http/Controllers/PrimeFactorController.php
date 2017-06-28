<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeFactorController extends Controller
{
  public function index($number){
    $output = [];
    $initial = $number;
    //converting number to int
    $number += 0;

    $count = 0;
    for($divisor = 2;$number >= $divisor;){
      if($number % $divisor == 0 ){
        array_push($output, $divisor);
        $count = 0;
        $number /= $divisor;
      } else {
        $count++;
        $divisor++;
        $initial = $number;
      }
    }

    if ($count > 0 && $initial > 1){
      array_push($output, $initial);
    }

    return json_encode($output);
  }
}

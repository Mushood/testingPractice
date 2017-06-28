<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RomanController extends Controller
{
  public function index($number){
    $output = "";

    if($number > 39){
      return 'Error: Number cannot be greater than 39';
    }

    $arabicNumerals = [10,9,5,4,1];
    $romanNumerals = ["X", "IX", "V" , "IV", "I"];

    foreach ($arabicNumerals as $key => $arabicNumeral) {
      while($number >= $arabicNumeral){
        $output .= $romanNumerals[$key];
        $number -= $arabicNumeral;
      }
    }

    return $output;
  }
}

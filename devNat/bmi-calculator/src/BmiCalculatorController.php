<?php

namespace Devnat\BmiCalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BmiCalculatorController extends Controller
{
    //
    public function bmi($height, $weight)
    {
        $tinggi = $height / 100;
        $meter = $tinggi * $tinggi;
        echo $weight / $meter;
    }
}

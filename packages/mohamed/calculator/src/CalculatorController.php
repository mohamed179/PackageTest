<?php

namespace Mohamed\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add ($a, $b) {
        return view('calculator::add')->with('result', $a + $b);
    }

    public function subtract ($a, $b) {
        return view('calculator::subtract')->with('result', $a - $b);
    }
}

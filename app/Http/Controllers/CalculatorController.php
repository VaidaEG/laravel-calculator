<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index($action, $number1, $number2) // <--- gates metodas
    {
        return view('calculator.gates', ['action' => $action, 'number1' => $number1, 'number2' => $number2]);
    }
}

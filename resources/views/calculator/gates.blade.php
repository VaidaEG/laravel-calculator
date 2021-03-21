@extends('layout.main')
@section('calculatorContent')
    @if($action === 'add')
        <h1 style="color: green">Sum of number {{$number1}} and number {{$number2}} is equal to {{$number1 + $number2}}.</h1>
    @elseif($action === 'substract')
        <h1 style="color: red">Substraction of number {{$number1}} and number {{$number2}} is equal to {{$number1 - $number2}}.</h1>
    @elseif($action === 'multiply')
        <h1 style="color: orange;">Multiplication of number {{$number1}} and number {{$number2}} is equal to {{$number1 * $number2}}.</h1>
    @elseif($action === 'divide')
        <h1 style="color: blue;">Division of number {{$number1}} and number {{$number2}} is equal to {{$number1 / $number2}}.</h1>
    @endif
@endsection
@section('title')
My laravel calculator
@endsection
@extends('layout.main')
@section('content')
  <h1>Post Calculator</h1>
  <div>{{$r}}</div>
  <form action="{{route('do-math')}}" method="post">
  X: <input type="text" name="x">
  Y: <input type="text" name="y">
  <button type="submit">DO MATH</button>
  @csrf
  </form>
@endsection
@section('title')
My laravel post calculator
@endsection
@extends('layouts.layout')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
  <div class="center content">
      <div class="title">
          <h1>Pizza's</h1>
      </div>
      <div class="pizzas">
        @foreach ($pizzas as $pizza)
        <div class="list">
        <a href="/pizzas/{{$pizza->id}}"><h3>{{$pizza->name}}</h3></a>
          <ul>
            <li>Type - {{$pizza->type}} </li>
            <li>Base - {{$pizza->base}} </li>
          </ul>
        </div>
        @endforeach
      </div>
  </div>
</div>
@endsection
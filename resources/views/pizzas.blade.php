@extends('layouts.layout')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
  <div class="center content">
      <div class="title m-b-md">
          Pizza's 
      </div>
      @foreach ($pizzas as $pizza)
        <ul>
          <li>{{$pizza['type']}} </li>
          <li> {{$pizza['base']}} </li>
          <li> {{$pizza['price']}} </li>
        </ul>
        @endforeach
  </div>
</div>
@endsection
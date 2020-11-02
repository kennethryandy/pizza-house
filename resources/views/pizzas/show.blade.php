@extends('layouts.layout')

@section('content')
    <div class="center">
      <h3>{{$pizza->name}}</h3>
      <p>{{$pizza->type}}</p>
      <p>{{$pizza->base}}</p>
      <p>Toppings:</p>
      <ul>
      @foreach ($pizza->toppings as $topping)
          <li>{{$topping}}</li>
      @endforeach
      </ul>
      <form method="POST" action="/pizzas/{{$pizza->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Complete order.</button>
      </form>
      <a href="/pizzas">Go back</a>
    </div>
@endsection
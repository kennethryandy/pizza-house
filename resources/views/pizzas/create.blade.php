@extends('layouts.layout')
@section('content')

<div class="create">
  <h1>Add pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input name="name" type="text">
    <label for="name">Choose Pizza Type:</label>
    <select name="type">
      <option value="margarita">Margarita</option>
      <option value="vege supreme">Vege Supreme</option>
      <option value="volcano">Volcano</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="peperoni">Peperoni</option>
    </select>
    <<label for="name">Choose Base Type:</label>
    <select name="base">
      <option value="chessy crust">Chessy Crust</option>
      <option value="garlic crust">Garlic Crust</option>
      <option value="thick & thin">Thick & Thin</option>
      <option value="thin & crispy">Thin & Crispy</option>
    </select>
    <fieldset>
      <label>Select Toppings:</label>
      <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
      <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
      <input type="checkbox" name="toppings[]" value="garlics">Garlics <br/>
      <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
    </fieldset>
    <input type="submit" value="submit">
  </form>
</div>

@endsection
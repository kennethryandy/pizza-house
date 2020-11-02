<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ["type" => "Hawaiian", "base" => "Chessy crust", "price" => 30],
            ["type" => "Peperoni", "base" => "Garlic crust", "price" => 25],
            ["type" => "Pineapple", "base" => "Thin & Thick", "price" => 17]
        ];

        return view('pizzas', ["pizzas" => $pizzas]);
    }
    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action = "/pizzas" method = "POST">
        @csrf
        <label for="name">Your name:</label>
        <input for="text" id = "name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers</br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic</br>
            <input type="checkbox" name="toppings[]" value="olives">Olives</br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
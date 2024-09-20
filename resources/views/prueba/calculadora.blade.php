@extends('layout.app')
@section('title', 'Calculadora')
@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<section>
    <form class="calculadora-form" action="{{ route('prueba.calcuadora') }}" method="POST">
        @csrf
        <h1 class="titulo-calculadora">Calculadora en Laravel</h1>
        <label class="label-calculadora" for="numero1">Numero1: </label>
        <input class="input-calculadora" type="number" name="numero1" autofocus>
        <br>
        <br>
        <label class="label-calculadora" for="numero2">Numero2: </label>
        <input class="input-calculadora" type="number" name="numero2">
        <br>
        <br>
        <select class="select-calculadora" name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">División</option>
        </select>
        <br>
        <br>
        <button class="boton-calcular" type="submit">Calcular</button>

    </form>
    @if (isset($resultado))
    <h2 class="resultado-calculadora">Resultado: {{ $resultado }}</h2>
    @endif
@endsection

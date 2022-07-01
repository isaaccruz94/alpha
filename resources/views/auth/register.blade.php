@extends('layouts.app')

@section('title')
    Registro
@endsection

@section('content')
<h2>Registro de Usuarios</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Nombre de usuario</label>
        <input type="text" id="name" name="name" placeholder="Ingresa tu nombre completo">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu email">

        <label for="password">Contrasena</label>
        <input type="password" id="password" name="password" placeholder="ingresa tu nueva contrasena">

        <label for="password_confirmation">Repite Contrasena</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="ingresa tu nueva contrasena">

        <input type="submit" value="Crear Cuenta de usuario">
    </form>
@endsection
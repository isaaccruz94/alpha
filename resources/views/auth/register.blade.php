@extends('layouts.app')

@section('title')
    Registro
@endsection

@section('content')
   
        <h2 class="text-center text-2xl mb-7">Registro de Usuarios</h2>
   
    <form action="{{ route('registro.store') }}" method="POST" class="w-1/2 m-auto" novalidate>
        @csrf

        <div class="ml-28 mb-7">
            <label for="name" class="block">Nombre de usuario</label>
            <input type="text" id="name" name="name" placeholder="Ingresa tu nombre completo" class="w-96 text-center" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
            
        </div>

        <div class="ml-28 mb-7">
            <label for="email" class="block">Email</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email"  class="w-96 text-center" value="{{ old('email') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="ml-28 mb-7">
            <label for="password" class="block">Contrasena</label>
            <input type="password" id="password" name="password" placeholder="ingresa tu nueva contrasena"  class="w-96 text-center">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="ml-28 mb-7">
                <label for="password_confirmation" class="block">Repite Contrasena</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="ingresa tu nueva contrasena"  class="w-96 text-center">
                @error('password')
                <p>{{ $message }}</p>
                @enderror
        </div>

        <input type="submit" value="Crear Cuenta de usuario">
    </form>
@endsection
@extends('layouts/main')


@section('content')

<div class="header-container">
    <div class="header">
        <div class="header-text">
            Instituto Tecnológico de Matehuala
        </div>
    </div>
    <div class="header-white">
        <div class="navbar">
            <a href="https://matehuala.tecnm.mx/intranet/" class="active">Intranet</a>
            <a href="{{ route('login') }}"><i class="fas fa-home"></i> Inicio</a>
            <a href="{{ route('ayuda') }}"><img src="/imagenes/ayuda.png" alt="Ayuda"> Ayuda</a>
        </div>
    </div>
</div>


<div class="register-container">
    <h2 class="title text-center">Crear cuenta</h2>
        <p class="verification-text">
            Asegurate de verificar tu correo electrónico institucional debido a que ahi estarás recibiendo notificaciones importantes de los procesos que realices en la plataforma.
        </p> 
    <form action="{{ route('registrar') }}" method="POST" class="register-form">
        @csrf
        <div class="mb-3 icon-container">
            <i class="fas fa-user input-icon"></i> 
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" required>
        </div>
        <div class="mb-3 icon-container">
            <i class="fas fa-envelope input-icon"></i> 
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo institucional" required>
        </div>
        <div class="mb-3 icon-container">
            <i class="fas fa-lock input-icon"></i> 
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="mb-3 icon-container">
            <i class="fas fa-lock input-icon"></i> 
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña" required>
        </div>
            <div class="button-container">
            <button type="submit" class="btn-custom">Crear cuenta</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection




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
            <a href="{{ route('ayuda') }}"><img src="/imagenes/ayuda.png" alt="Ayuda"> Ayuda</a>
        </div>
    </div>
</div>

<div class="login-container">
    <h2>Iniciar Sesión</h2> 
    <form action="{{ route('logear') }}" method="POST" class="login-form">
        @csrf
        <div class="mb-3 icon-container">
            <i class="fas fa-envelope input-icon"></i> 
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo institucional" required>
        </div>
        <div class="mb-3 icon-container">
            <i class="fas fa-lock input-icon"></i> 
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="button-container">
            <button type="submit" class="btn-custom">Iniciar Sesión</button>
        </div> 
    </form>
    
    <div class="mt-3">
        <a href="{{ route('registro') }}">Crear cuenta</a>
    </div>
    <div class="mt-3">
        <a href="{{ route('forgot-password') }}">¿Olvidaste tu contraseña?</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

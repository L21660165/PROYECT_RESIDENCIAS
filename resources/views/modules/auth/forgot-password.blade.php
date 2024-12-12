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
                <a href="#" class="active">Intranet</a>
                <a href="{{ route('login') }}"><i class="fas fa-home"></i> Inicio</a>
                <a href="{{ route('ayuda') }}"><img src="/imagenes/ayuda.png" alt="Ayuda"> Ayuda</a>
            </div>
        </div>
    </div>

    <div class="login-container">
        <h2>Recuperar Contraseña</h2> 
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="mb-3 icon-container">
                <i class="fas fa-envelope input-icon"></i>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
            </div>

        </form>
        <div class="button-container">
            <button type="submit" class="btn-custom">Solicitar Código</button>
        </div>
        <div class="mt-3">
            <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión aqui</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection


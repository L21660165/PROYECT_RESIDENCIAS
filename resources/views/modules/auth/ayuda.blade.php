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
                <img src="/imagenes/fondo.png" alt="logo">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="rectangulo">
            <h3>Ayuda 1</h3>
            <p>Ayuda numero 1</p>
        </div>
        <div class="rectangulo">
            <h3>Ayuda 2</h3>
            <p>Ayuda numero 2</p>
        </div>
        <div class="rectangulo">
            <h3>Ayuda 3</h3>
            <p>Ayuda numero 3</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
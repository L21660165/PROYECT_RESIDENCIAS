<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <!-- Enlace a la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Inter&display=swap" rel="stylesheet">
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <!-- Enlace a la hoja de estilos para el registro -->
    <link rel="stylesheet" href="{{ asset('css/estiloregistro.css') }}">
    <!-- Enlace a la hoja de estilos adicional -->
    <link rel="stylesheet" href="{{ asset('css/estiloc.css') }}">
</head>
<body>
    <!-- Contenedor del encabezado -->
    <div class="header-container">
        <div class="header">
            <div class="header-text">
                Instituto Tecnológico de Matehuala
            </div>
        </div>
        <div class="header-white">
            <div class="navbar">
                <!-- Enlace a la intranet -->
                <a href="https://matehuala.tecnm.mx/intranet/" class="active">Intranet</a>
                <!-- Enlace a la página de inicio -->
                <a href="{{ route('login') }}"><i class="fas fa-home"></i> Inicio</a>
                <!-- Enlace a la página de ayuda -->
                <a href="{{ route('ayuda') }}"><img src="/imagenes/ayuda.png" alt="Ayuda"> Ayuda</a>
            </div>
        </div>
    </div>

    <!-- Estilos personalizados -->
    <style>
        .title {
            font-family: 'Impact';
            font-size: 30px;
            color: #ffffff; 
            background-color: #0C13EC; 
            padding: 10px 20px; 
            width: 20%; 
            margin: 20px auto;
        }
    </style>

    <!-- Contenedor del formulario de registro -->
    <div class="register-container">
        <h2 class="title">Crear Cuenta</h2>
        <!-- Formulario para crear una nueva cuenta -->
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Campo de entrada para el nombre -->
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <!-- Campo de entrada para el correo electrónico -->
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <!-- Campo de entrada para la contraseña -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <!-- Campo de entrada para confirmar la contraseña -->
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <!-- Enlace al script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

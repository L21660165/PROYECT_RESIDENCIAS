<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Enlace a la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Inter&display=swap" rel="stylesheet">
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
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

    <!-- Contenedor del formulario de inicio de sesión -->
    <div class="login-container">
        <h2>Inicio de Sesión</h2>
        <!-- Formulario de inicio de sesión -->
        <form id="loginForm" class="login-form" method="POST">
            @csrf
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
            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        <div class="mt-3">
            <!-- Enlace a la página de recuperación de contraseña -->
            <a href="{{ route('forgot-password-info') }}">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
    <!-- Enlace al script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Agregar un evento de escucha al formulario de inicio de sesión
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevenir el envío del formulario
        
        // Obtener los valores de los campos de entrada
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        
        // Verificar las credenciales de inicio de sesión
        if (email === 'docente@matehuala.tecnm.mx' && password === '070304') {
            window.location.href = "{{ route('docente') }}";  // Redirigir a la página del docente
        } else {
            alert('Correo o contraseña incorrectos.');  // Mostrar un mensaje de error
        }
    });
    </script>
</body>
</html>

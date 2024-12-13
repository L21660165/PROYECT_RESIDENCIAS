<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>
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

    <div class="menu-icon" onclick="toggleMenu()">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <!-- Menú -->
    <div class="menu" id="side-menu">
        <div class="close-btn" onclick="toggleMenu()">X</div>
        <div class="user-section">
            <i class="fas fa-user"></i> Docente
        </div>
        <div class="logout" onclick="logout()">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
        </div>
        <div class="stats-section">
            <a href="{{ route('residencias') }}">
                <i class="fas fa-home"></i> Residencias
            </a>
        <div class="stats-section">
            <a href="{{ route('estadisticas') }}">
                <i class="fas fa-chart-bar"></i> Estadísticas Residenciales
            </a>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('side-menu');
            const menuIcon = document.querySelector('.menu-icon');
            menu.classList.toggle('active');
            if (menu.classList.contains('active')) {
                menuIcon.style.display = 'none';  
            } else {
                menuIcon.style.display = 'block';  
            }
        }
        function logout() {
            window.location.href = "{{ route('login') }}"; 
        }
    </script>

</body>
</html>

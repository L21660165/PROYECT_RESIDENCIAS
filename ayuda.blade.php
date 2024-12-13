<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <!-- Enlace a la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Inter&display=swap" rel="stylesheet">
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <!-- Enlace a la hoja de estilos del menú -->
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
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

    <!-- Icono del menú -->
    <div class="menu-icon" onclick="toggleMenu()">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <!-- Menú lateral -->
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
        </div>
        <div class="stats-section">
            <a href="{{ route('estadisticas') }}">
                <i class="fas fa-chart-bar"></i> Estadísticas Residenciales
            </a>
        </div>
    </div>

    <!-- Contenedor de búsqueda -->
    <div class="search-container">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Buscar proyecto">
        <button>Consultar</button>
    </div>
    <div class="divider"></div>

    <!-- Contenedor de ayuda -->
    <div class="help-container">
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

    <!-- Enlace al script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

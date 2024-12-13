<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residencias</title>
    <!-- Enlaces a fuentes y hojas de estilo -->
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/docente.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilos para el contenedor de cuadros azules */
        .blue-squares-container {
            display: flex;
            justify-content: space-between;
            margin-top: 100px;
            margin-left: 5%;
            margin-right: 5%;
        }

        /* Estilos para los cuadros azules */
        .blue-square {
            width: 30%;
            height: auto;
            margin-top: 9px;
            background-color: blue;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        /* Estilos para el botón seleccionado */
        .status-button.selected {
            background-color: #007bff;
            color: white;
        }

        /* Estilos para los botones dentro de los cuadros azules */
        .blue-square button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilos para el botón de reporte preliminar */
        .blue-square .btn-report {
            background-color: #00bfff;
            color: white;
        }

        /* Estilos para el botón de enviar email */
        .blue-square .btn-email {
            background-color: #ff8c00;
            color: white;
        }

        /* Estilos para el contenedor de iconos dentro de los cuadros azules */
        .blue-square .icon-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        /* Estilos para los iconos dentro de los cuadros azules */
        .blue-square .icon-container .icon {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: white;
        }

        /* Estilos para el icono verde */
        .blue-square .icon-container .icon-green {
            background-color: green;
        }

        /* Estilos para el icono rojo */
        .blue-square .icon-container .icon-red {
            background-color: red;
        }

        /* Estilos para las cajas de contenido */
        .content-box.active {
            display: block;
        }

        .content-box {
            display: none;
        }
    </style>
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
            <a href="https://matehuala.tecnm.mx/intranet/" class="active">Intranet</a>
            <a href="{{ route('login') }}"><i class="fas fa-home"></i> Inicio</a>
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

<!-- Botones de estado -->
<div class="status-buttons">
    <button class="status-button" onclick="selectButton(this, 'content1'); showBlueSquares()">1. En Revisión</button>
    <button class="status-button" onclick="selectButton(this, 'content2'); hideBlueSquares()">2. En Asesoria</button>
    <button class="status-button" onclick="selectButton(this, 'content3'); hideBlueSquares()">3. Proyectos Finalizados</button>
</div>

<!-- Contenedor de residencias -->
<div class="residencias-rectangle" id="rectangle">
    <span>Residencias</span>
</div>

<!-- Cajas de contenido -->
<div id="content1" class="content-box"></div>
<div id="content2" class="content-box"></div>
<div id="content3" class="content-box"></div>

<script>
    // Función para alternar el menú lateral
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

    // Función para cerrar sesión
    function logout() {
        window.location.href = "{{ route('login') }}"; 
    }
    
    // Función para seleccionar un botón de estado
    function selectButton(button, contentId) {
        const buttons = document.querySelectorAll('.status-button');
        buttons.forEach(btn => btn.classList.remove('selected'));
        button.classList.add('selected');
        const contentBoxes = document.querySelectorAll('.content-box');
        contentBoxes.forEach(box => box.classList.remove('active'));
        const selectedContent = document.getElementById(contentId);
        selectedContent.classList.add('active');
    }

    // Función para mostrar los cuadros azules
    function showBlueSquares() {
        // Eliminar cualquier contenedor de cuadros azules existente
        const existingContainer = document.querySelector('.blue-squares-container');
        if (existingContainer) {
            existingContainer.remove();
        }

        const container = document.createElement('div');
        container.className = 'blue-squares-container';

        for (let i = 0; i < 3; i++) {
            const square = document.createElement('div');
            square.className = 'blue-square';
            square.innerHTML = `
                <p>Nombre de la empresa</p>
                <p>En revisión de</p>
                <p>Nombre del maestro</p>
                <p>Fecha de publicación</p>
                <p>Propuesta propia</p>
                <p>Nombre del alumno y número de control</p>
                <button class="btn-report">Ver reporte preliminar</button>
                <button class="btn-email">Enviar email</button>
                <div class="icon-container">
                    <div class="icon icon-green"><i class="fas fa-check"></i></div>
                    <div class="icon icon-red"><i class="fas fa-times"></i></div>
                </div>
            `;
            container.appendChild(square);
        }

        // Insertar el contenedor justo debajo de los botones de estado
        const statusButtons = document.querySelector('.status-buttons');
        statusButtons.insertAdjacentElement('afterend', container);
    }

    // Función para ocultar los cuadros azules
    function hideBlueSquares() {
        const existingContainer = document.querySelector('.blue-squares-container');
        if (existingContainer) {
            existingContainer.remove();
        }
    }
</script>

</body>
</html>

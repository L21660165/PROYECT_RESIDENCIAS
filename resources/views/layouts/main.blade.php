<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residencias - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/estiloc.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/estiloregistro.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/estiloayuda.css') }}">
</head>
<body>
    @show
    
    
    @yield('content')
  
</body>
</html>
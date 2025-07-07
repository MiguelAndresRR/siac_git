<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <meta charset="UTF-8">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/171f3dc321.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/productos/productos.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/productos/editar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos/tabla.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos/paginacion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos/mostrar.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container">
        @if (session('message'))
            <script>
                Swal.fire({
                    title: {!! session('message')['type'] === 'error' ? json_encode('Error') : json_encode('Éxito') !!},
                    text: @json(session('message')['text']),
                    icon: @json(session('message')['type']),
                    confirmButtonText: 'Aceptar',
                    customClass: {
                        confirmButton: 'btn-confirmar'
                    },
                    buttonsStyling: false
                });
            </script>
        @endif
    </div>
    @include('admin.layout.sidebar')
    <div class="content-productos">
        <div class="header">
            <h1><i class="fa-solid fa-cubes"></i>Productos</h1>
        </div>
        @include('admin.productos.layoutproductos.filtros')
        <div id="tabla-productos">
            @include('admin.productos.layoutproductos.tablaproductos')
        </div>
    </div>
    @include('admin.productos.modal.edit')
    {{-- @include('admin.productos.modal.mostrar') --}}
    @include('admin.productos.modal.create')
</body>
</html>

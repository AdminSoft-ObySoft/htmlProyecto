<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicio2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crear_usuario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crear_facultad.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>@yield('title')</title>
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>TUTORIAS<span>UG</span></h2>
        </div>
        <div class="search--notification--profile">
            <!-- <div class="search">
                <input type="text" placeholder="Search Scdule..">
                <button><i class="ri-search-2-line"></i></button>
            </div> -->
            <div class="notification--profile">
                <!-- <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div> -->
                
                <div class="picon profile">
                    <a href="/perfil">
                        <img src="{{ asset('img/profile.jpg') }}" alt="">
                    </a>
                </div>
                <div class="picon logout">
                    <a href="#"><i class="ri-logout-box-r-fill"></i></a>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <!-- <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li> -->
                <li>
                    <a href="/perfil">
                        <span class="icon icon-2"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-usuario">
                        <span class="icon icon-2"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-roles">
                        <span class="icon icon-3"><i class="ri-file-shield-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Roles</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-facultades">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Facultades</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-asignaturas">
                        <span class="icon icon-5"><i class="ri-input-method-line"></i></span>
                        <span class="sidebar--item">Asignaturas</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-tutorias">
                        <span class="icon icon-6"><i class="ri-file-copy-2-line"></i></span>
                        <span class="sidebar--item">Tutorias</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-calendar-todo-fill"></i></span>
                        <span class="sidebar--item">Actividades</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-8"><i class="ri-pencil-ruler-2-line"></i></span>
                        <span class="sidebar--item">Pruebas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-2"><i class="ri-pie-chart-2-line"></i></span>
                        <span class="sidebar--item">Reportes</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            @yield('content')
        </div>
    </section>
    <script src="{{ asset('js/validaciones.js') }}"></script>
    <script src="{{ asset('js/inicio2.js') }}"></script>
</body>

</html>
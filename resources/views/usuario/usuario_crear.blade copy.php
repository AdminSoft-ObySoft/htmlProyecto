<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/inicio2.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/crear_usuario.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Dashboard</title>
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
                    <img src="{{ asset('img/profile.jpg') }}" alt="">
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
                    <a href="/inicio2">
                        <span class="icon icon-2"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-3"><i class="ri-file-shield-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Roles</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Facultades</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-5"><i class="ri-input-method-line"></i></span>
                        <span class="sidebar--item">Asignaturas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
            <div class="recent--patients">
                <div class="title">
                    <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
                    <a href="/inicio2" class="add"><i class="ri-arrow-left-fill"></i>Volver</a>
                    <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
                </div>
                <div class="table">
                    <div class="container">
                    <div class="title">Crear Usuario</div>
                    <form action="#">
                        <div class="user-details">
                            <div class="input-box">
                                <input type="text" placeholder="Nombre" required>
                                <i class="uil uil-user icon"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Apellido paterno" required>
                                <i class="uil uil-user icon"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Apellido materno" required>
                                <i class="uil uil-user icon"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Numero de cédula" required>
                                <i class="uil uil-card-atm icon"></i>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Usuario" required>
                                <i class="uil uil-user icon"></i>
                            </div>
                            <div class="input-box">
                                <input type="email" placeholder="Correo institucional" required>
                                <i class="uil uil-envelope icon"></i>
                            </div>
                            <div class="input-box">
                                <input type="password" class="password" placeholder="Contraseña" required>
                                <i class="uil uil-lock icon"></i>
                                <!-- <i class="uil uil-eye-slash showHidePw"></i> -->
                            </div>
                            <div class="input-box">
                                <input type="password" class="password" placeholder="Confirmar contraseña" required>
                                <i class="uil uil-lock icon"></i>
                                <!-- <i class="uil uil-eye-slash showHidePw"></i> -->
                            </div>
                        </div>
                        <div class="button">
                            <input type="button" value="Guardar">
                        </div>
                    </form>
                    <!-- <div class="login-signup">
                        <span class="text">¿Ya tienes una cuenta?</span>
                        <a href="/login" class="text signup-link">Inicia sesión</a>
                    </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/inicio2.js') }}"></script>
</body>

</html>
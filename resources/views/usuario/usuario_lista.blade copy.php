<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicio2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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
                    <h2 class="section--title">LISTA DE USUARIOS</h2>
                    <a href="/crear-usuario" class="add"><i class="ri-add-line"></i>Nuevo usuario</a>
                    <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cedula</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Roles</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Nombres">Erick Emilio</td>
                                <td data-label="Apellidos">Briones Dominguez</td>
                                <td data-label="Cedula">1205845758</td>
                                <td data-label="Usuario">ebriones</td>
                                <td data-label="Correo">ebriones@edu.ug</td>
                                <td data-label="Roles">Administrador</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td data-label="Nombres">Erick Emilio</td>
                                <td data-label="Apellidos">Briones Dominguez</td>
                                <td data-label="Cedula">1205845758</td>
                                <td data-label="Usuario">ebriones</td>
                                <td data-label="Correo">ebriones@edu.ug</td>
                                <td data-label="Roles">Administrador</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td data-label="Nombres">Erick Emilio</td>
                                <td data-label="Apellidos">Briones Dominguez</td>
                                <td data-label="Cedula">1205845758</td>
                                <td data-label="Usuario">ebriones</td>
                                <td data-label="Correo">ebriones@edu.ug</td>
                                <td data-label="Roles">Administrador</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td data-label="Nombres">Erick Emilio</td>
                                <td data-label="Apellidos">Briones Dominguez</td>
                                <td data-label="Cedula">1205845758</td>
                                <td data-label="Usuario">ebriones</td>
                                <td data-label="Correo">ebriones@edu.ug</td>
                                <td data-label="Roles">Administrador</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td data-label="Nombres">Erick Emilio</td>
                                <td data-label="Apellidos">Briones Dominguez</td>
                                <td data-label="Cedula">1205845758</td>
                                <td data-label="Usuario">ebriones</td>
                                <td data-label="Correo">ebriones@edu.ug</td>
                                <td data-label="Roles">Administrador</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td data-label="Nombres">Erick Emilio</td>
                                <td data-label="Apellidos">Briones Dominguez</td>
                                <td data-label="Cedula">1205845758</td>
                                <td data-label="Usuario">ebriones</td>
                                <td data-label="Correo">ebriones@edu.ug</td>
                                <td data-label="Roles">Administrador</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/inicio2.js') }}"></script>
</body>

</html>
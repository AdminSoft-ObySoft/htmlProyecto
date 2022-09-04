<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"> -->
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--FONTAWESONE-->
    <link rel="stylesheet" href="{{ asset('css/styleB.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid g-0">
        <div class="header">
            <nav class="navbar navbar-expand-sm navbar-primary bg-primary px-2">
                <div class="container-fluid nav-title">
                    <a class="navbar-brand px-4 menu" href="#">TUTORIAS<span>UG</span> </a>

                    <button class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- <div class="side-nav-button p-2 me-3 text-light">
                        <i class="fa-solid fa-bars menu"></i>
                    </div> -->
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto">
                            <!-- <li class="nav-item dropdown">
                                <a href="#" role="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu 1</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>

                    <div class="profile-logo dropstart">
                        <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">
                            Jose Asencio
                        </button>
                        <ul class="dropdown-menu dropdown-menu-secondary">
                            <li><a class="dropdown-item" href="#">Your Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <main>
            <div class="sidebar">
                <div class="side-nav-content">
                    <ul class="nav-list">
                        <li class="nav-list-item">
                            <i class="fa-solid fa-users"></i>
                            <span>
                                <a href="/home-user-create">Usuarios</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                        <i class="fa-solid fa-key"></i>
                            <span>
                                <a href="/home-roles-create">Roles</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>
                                <a href="/home-facultades-create">Facultades</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-book-open"></i>
                            <span>
                                <a href="/home-asignaturas-create">Asignaturas</a>
                            </span>
                        </li>
                        <li class="nav-list-item dropdown">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <span>
                                <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Tutorias</a>
                                <ul class="dropdown-menu dropdown-menu-secondary">
                                    <li><a class="dropdown-item" href="/home-tutorias-create">Crear Tutoria</a></li>
                                    <li><a class="dropdown-item" href="/home-tutorias-solicitud">Solicitar tutoria</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </span>
                        </li>
                        <li class="nav-list-item dropdown">
                            <i class="fa-solid fa-folder"></i>
                            <span>
                                <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Actividades</a>
                                <ul class="dropdown-menu dropdown-menu-secondary">
                                    <li><a class="dropdown-item" href="/home-actividades-manuales">Calificación manual</a></li>
                                    <li><a class="dropdown-item" href="/home-actividades-predefinidas">Calificación predefinida</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </span>
                        </li>
                        <li class="nav-list-item dropdown">
                            <i class="fa-solid fa-folder"></i>
                            <span>
                                <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Pruebas</a>
                                <ul class="dropdown-menu dropdown-menu-secondary">
                                    <li><a class="dropdown-item" href="/home-pruebas-crear">Crear prueba</a></li>
                                    <li><a class="dropdown-item" href="#">Banco de preguntas</a></li>
                                    <li><a class="dropdown-item" href="/home-notas-evaluacion">Notas de evaluación</a></li>
                                </ul>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-font"></i>
                            <span>
                                <a href="/home-pruebas-crear">Pruebas</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-users"></i>
                            <span>
                                <a href="/home-pruebas-crear">Usuarios</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="display-area p-3">
                @yield('content')
            </div>
        </main>
    </div>





    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabla').DataTable();
        });
        </script> -->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
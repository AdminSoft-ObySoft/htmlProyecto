<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Document</title>
</head>
<body>
    <input type="checkbox" id="menu">
    <nav>
        <label for="">Universidad de Guayaquil</label>
        <ul>
            <li><a href="#">Cerrar Sesión</a></li>
        </ul>

        <label for="menu" class="menu-bar"><i class="fa fa-bars"></i></label>
    </nav>
    <div class="side-menu">
        <center>
            <img src="{{ asset('img/user.png') }}" alt="logo">
            <br><br>
            <h2>Rafael Correa</h2>
        </center>
        <br>

        <a href=""><i class="fa fa-user"></i><span>Usuarios</span></a>
        <a href=""><i class="fa-solid fa-id-card"></i></i><span>Perfil de usuarios</span></a>
        <a href=""><i class="fa fa-shopping-basket"></i><span>Products</span></a>
        <a href=""><i class="fa fa-sellsy"></i><span>Statistices</span></a>
        <a href=""><i class="fa fa-ban"></i><span>Ban Customers</span></a>
        <a href=""><i class="fa-solid fa-gear"></i><span>Setting</span></a>

        <a href="#" class="Logout"><span>Logout</span></a>
    </div>

    <div class="data">
        <div class="table-container" style="border: 2px solid red;">
            <h1 class="heading">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cedula</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Roles</th>
                            <th>#</th>
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
                            <td data-label="#"><a href=""><i class="fa-solid fa-pen-to-square edit"></i></a><a href=""><i class="fa-solid fa-trash-can delete"></i></a></td>
                        </tr>
                        <tr>
                            <td data-label="Nombres">Erick Emilio</td>
                            <td data-label="Apellidos">Briones Dominguez</td>
                            <td data-label="Cedula">1205845758</td>
                            <td data-label="Usuario">ebriones</td>
                            <td data-label="Correo">ebriones@edu.ug</td>
                            <td data-label="Roles">Administrador</td>
                            <td data-label="#"><a href=""><i class="fa-solid fa-pen-to-square"></i></a><a href=""><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        <tr>
                            <td data-label="Nombres">Erick Emilio</td>
                            <td data-label="Apellidos">Briones Dominguez</td>
                            <td data-label="Cedula">1205845758</td>
                            <td data-label="Usuario">ebriones</td>
                            <td data-label="Correo">ebriones@edu.ug</td>
                            <td data-label="Roles">Administrador</td>
                            <td data-label="#"><a href=""><i class="fa-solid fa-pen-to-square"></i></a><a href=""><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        <tr>
                            <td data-label="Nombres">Erick Emilio</td>
                            <td data-label="Apellidos">Briones Dominguez</td>
                            <td data-label="Cedula">1205845758</td>
                            <td data-label="Usuario">ebriones</td>
                            <td data-label="Correo">ebriones@edu.ug</td>
                            <td data-label="Roles">Administrador</td>
                            <td data-label="#"><a href=""><i class="fa-solid fa-pen-to-square"></i></a><a href=""><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </h1>
        </div>
    </div>
</body>
</html>
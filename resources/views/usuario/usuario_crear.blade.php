@extends('layout.layout2')
@section('title', 'Crear Usuario')
@section('content')

<section class="content">
    <div class="recent--patientscu">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-usuario" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescu">
            <div class="containerscu">
            <div class="titles">Crear Usuario</div>
            <div class="form">
            <form action="listar-usuario.php" id="formUser">
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" placeholder="Nombre" id= "nombre" name="nombre" required>
                        <i class="uil uil-user icon"></i>
                        <p></p>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Apellido paterno" id= "apellido" name="apellido" required>
                        <i class="uil uil-user icon"></i>
                        <p></p>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Apellido materno" id= "" name="">
                        <i class="uil uil-user icon"></i>
                        <p></p>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Numero de cédula" id= "cedula" name="cedula" required>
                        <i class="uil uil-card-atm icon"></i>
                        <p></p>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Usuario" id= "usuario" name="usuario" required>
                        <i class="uil uil-user icon"></i>
                        <p></p>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Correo institucional" id= "email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                        <p></p>
                    </div>
                    <div class="input-box">
                        <input type="password" class="password" placeholder="Contraseña" id= "contraseña" name="contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <p></p>
                        <!-- <i class="uil uil-eye-slash showHidePw"></i> -->
                    </div>
                    <div class="input-box">
                        <input type="password" class="password" placeholder="Confirmar contraseña" id= "confirmar" name="confirmar" required>
                        <i class="uil uil-lock icon"></i>
                        <p></p>
                        <!-- <i class="uil uil-eye-slash showHidePw"></i> -->
                    </div>
                    <select name="select" class="select-css">
                        <option value="value1">Administardor</option>
                        <option value="value2">Docente</option>
                        <option value="value3">Estudiante</option>
                    </select>
                </div>
                <div class="button">
                    <input type="button" value="Guardar">
                    
                </div>
            </form>
            </div>
            
            <!-- <div class="login-signup">
                <span class="text">¿Ya tienes una cuenta?</span>
                <a href="/login" class="text signup-link">Inicia sesión</a>
            </div> -->

            </div>
        </div>
    </div>

    @endsection
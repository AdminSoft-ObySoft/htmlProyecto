@extends('layoutB.layout')
@section('title', 'Crear Usuario')

@section('content')
<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR USUARIO</h4>
                <a href="/home-user-list" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form action="" class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label" for="nombre">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="apellidoP">Apellido paterno</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="apellidoP" placeholder="Apellido paterno">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="apellidoM">Apellido materno</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="apellidoM" placeholder="Apellido materno">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="cedula">Cédula</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                            <input type="number" class="form-control" name="cedula" placeholder="Cedula">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="usuario">Usuario</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="correo">Correo Institucional</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" name="correo" placeholder="Correo Institucional">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="perfil">Perfil</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <select class="form-select perfil-select" name="perfil">
                                <option selected>Selecciona perfil</option>
                                <option value="1">Administrador</option>
                                <option value="2">Tutor</option>
                                <option value="3">Estudiante</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="contraseña">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="confirmar">Confimar contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="confirmar" placeholder="Confimar contraseña">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
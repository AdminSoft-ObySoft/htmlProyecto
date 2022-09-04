@extends('layout.layout2')
@section('title', 'Crear Roles')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-roles" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Roles</div>

            <form action="#">
                <div class="user-details">
                    <div class="input-fields">
                        <input type="text" placeholder="Nombre perfil" required>
                        <i class="uil uil-keyhole-square icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Nombre del modulo" required>
                        <i class="uil uil-align-justify icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Permiso por cada modulo" required>
                        <i class="uil uil-key-skeleton-alt icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Opciones disponibles" required>
                        <i class="uil uil-ellipsis-v icon"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="estado" id="estado" >
                            <label for="estado" class="text">Activo</label>
                        </div>
                        <a href="recuperar-contraseña" class="text" disabled hidden>Recuperar contraseña</a>
                    </div>
                </div>
                <div class="button">
                    <input type="button" value="Guardar">
                </div>
            </form>
            </div>
        </div>
    </div>
    @endsection
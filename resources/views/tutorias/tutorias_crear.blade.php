@extends('layout.layout2')
@section('title', 'Crear Tutorias')
@section('content')

<section class="content">
    <div class="recent--patientscu">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-tutorias" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescu">
            <div class="containerscu">
            <div class="titles">Crear Tutorias</div>
            <div class="form">
            <form action="#">
                <div class="user-details">
                    <div class="input-fields">
                        <select name="facultad" class="select-css">
                            <option value="value1">Facultad Ciencias matenaticas y fisicas</option>
                            <option value="value2">Facultad de Ciencias Económicas.</option>
                            <option value="value3">Facultad de Ciencias Médicas</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <select name="carrera" class="select-css">
                            <option value="value1">Ingenieria civil</option>
                            <option value="value2">Ingenieria en sistemas computacionales</option>
                            <option value="value3">Odontologia</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <select name="asignatura" class="select-css">
                            <option value="value1">Matematica</option>
                            <option value="value2">Fisica</option>
                            <option value="value3">Programacion orientada a objeto</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <select name="docente" class="select-css">
                            <option value="value1">Ing Rafel Marin</option>
                            <option value="value2">Ing Ronny Matute</option>
                            <option value="value3">Ing Jhon Obando</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <input type="number" placeholder="Numero maximo de estudiantes" required>
                        <i class="uil uil-list-ol-alt icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Tema" required>
                        <i class="uil uil-swatchbook icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Lugar" required>
                        <i class="uil uil-map-marker-shield icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="date" placeholder="Fecha" required>
                        <i class="uil uil-calendar-alt icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="time" placeholder="Hora inicio" required>
                        <i class="uil uil-clock icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="time" placeholder="Hora termino" required>
                        <i class="uil uil-clock icon"></i>
                    </div>
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
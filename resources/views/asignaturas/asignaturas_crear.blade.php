@extends('layout.layout2')
@section('title', 'Crear Asignaturas')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-asignaturas" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Asignaturas</div>

            <form action="#">
                <div class="user-details">
                    <select name="facultad" class="select-css">
                        <option value="value1">Facultad Ciencias matenaticas y fisicas</option>
                        <option value="value2">Facultad de Ciencias Económicas.</option>
                        <option value="value3">Facultad de Ciencias Médicas</option>
                    </select>
                    <select name="carrera" class="select-css">
                        <option value="value1">Ingenieria civil</option>
                        <option value="value2">Ingenieria en sistemas computacionales</option>
                        <option value="value3">Odontologia</option>
                    </select>
                    <select name="asignatura" class="select-css">
                        <option value="value1">Matematica</option>
                        <option value="value2">Fisica</option>
                        <option value="value3">Programacion orientada a objeto</option>
                    </select>
                    <select name="semestre" class="select-css">
                        <option value="value1">1</option>
                        <option value="value2">2</option>
                        <option value="value3">3</option>
                        <option value="value4">4</option>
                        <option value="value5">5</option>
                        <option value="value6">6</option>
                        <option value="value7">7</option>
                        <option value="value8">8</option>
                        <option value="value9">9</option>
                        <option value="value10">10</option>
                    </select>
                    <!-- <div class="input-fields">
                        <input type="text" placeholder="Facultad" required>
                        <i class="uil uil-university icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Carrera" required>
                        <i class="uil uil-books icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Asignatura" required>
                        <i class="uil uil-book-open icon"></i>
                    </div> -->
                </div>
                <div class="button">
                    <input type="button" value="Guardar">
                </div>
            </form>
            </div>
        </div>
    </div>
    @endsection
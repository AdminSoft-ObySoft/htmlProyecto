@extends('layout.layout2')
@section('title', 'Crear Facultades')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-facultades" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Facultades</div>

            <form action="#">
                <div class="user-details">
                    <div class="input-fields">
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
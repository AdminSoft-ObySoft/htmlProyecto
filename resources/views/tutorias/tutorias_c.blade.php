@extends('layoutB.layout')
@section('title', 'Crear Tutoria')

@section('content')
<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR TUTORIAS</h4>
                <a href="/home-tutorias-list" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form action="" class="row g-3">
                    <div class="col-md-12">
                        <!-- <label class="form-label perfil" for="perfil">Facultad</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                            <select class="form-select perfil-select" name="facultad">
                                <option selected>Selecciona facultad</option>
                                <option value="1">Ciencias matemáticas y fisicas</option>
                                <option value="2">Ciencias de la educación</option>
                                <option value="3">Ciencias de filosofia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="carrera">Carrera</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" name="carrera">
                                <option selected>Selecciona facultad</option>
                                <option value="1">Administración</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Networking</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="asignatura">Asignatura</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" name="asignatura">
                                <option selected>Selecciona facultad</option>
                                <option value="1">Administración</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Networking</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="tutor">Tutor</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-chalkboard-user"></i></span>
                            <select class="form-select perfil-select" name="tutor">
                                <option selected>Selecciona tutor</option>
                                <option value="1">Ing Rafael Marin</option>
                                <option value="2">Ing Jose Asencio</option>
                                <option value="3">Ing Jhon Obando</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="max_Est">Maximo de estudiantes</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="number" class="form-control" name="max_Est" placeholder="Maximo de estudiantes">
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <!-- <label class="form-label" for="tema">Tema</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open"></i></span>
                            <input type="text" class="form-control" name="tema" placeholder="Tema">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="lugar">Lugar</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span>
                            <input type="text" class="form-control" name="lugar" placeholder="Lugar">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="fecha">Fecha</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            <input type="date" class="form-control" name="fecha" placeholder="Fecha">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="inicio">Hora inicio</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input type="time" class="form-control" name="inicio" placeholder="Hora inicio">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="fin">Hora fin</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input type="time" class="form-control" name="fin" placeholder="Hora fin">
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
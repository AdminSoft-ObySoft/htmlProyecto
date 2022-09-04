@extends('layoutB.layout')
@section('title', 'Crear Asignatura')
@section('content')

<section class="content">
<div class="d-flex justify-content-center mt-4">
<div class="card col-sm-8 p-3">
    <div class="mb-3 d-flex justify-content-between">
        <h4 class="titulo">CREAR ASIGNATURAS</h4>
        <a href="/home-asignaturas-list" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <div class="mb-2">
        <form action="" class="row g-3">
            <div class="col-md-12">
                <label class="form-label" for="perfil">Facultad</label>
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
            <div class="col-lg-12">
                <label class="form-label" for="carrera">Carrera</label>
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
            <div class="col-lg-12">
                <label class="form-label" for="asignatura">Asignatura</label>
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
            
            <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
        </form>
    </div>
</div>
</div>
</section>
@endsection
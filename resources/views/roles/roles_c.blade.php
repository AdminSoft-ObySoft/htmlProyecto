@extends('layoutB.layout')
@section('title', 'Crear Roles')
@section('content')

<section class="content">
<div class="d-flex justify-content-center mt-4">
<div class="card col-sm-6 p-3">
    <div class="mb-3 d-flex justify-content-between">
        <h4 class="titulo">CREAR ROLES</h4>
        <a href="/home-roles-list" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <div class="mb-2">
        <form action="" class="row g-3">
            <div class="col-md-12">
                <label class="form-label" for="perfil">Nombre perfil</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="text" class="form-control" name="perfil" placeholder="Nombre perfil">
                </div>
                
            </div>
            <div class="col-lg-12">
                <label class="form-label" for="modulo">Nombre módulo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                    <input type="text" class="form-control" name="modulo" placeholder="Nombre módulo">
                </div>
                
            </div>
            <div class="col-lg-12">
                <label class="form-label" for="permiso">Permiso por cada módulo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-shield-halved"></i></span>
                    <input type="text" class="form-control" name="permiso" placeholder="Permiso por cada módulo">
                </div>
                
            </div>
            <div class="col-lg-12">
                <label class="form-label" for="opciones">Opciones disponibles</label>
                <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        <input type="number" class="form-control" name="opciones" placeholder="Opciones disponibles">
                    </div>
                
            </div>
            <div class="col-lg-12">
            <div class="input-group">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="estado" checked>
                </div>
                <label class="form-check-label" for="estado">Activo</label>
            </div>
                
            </div>
            <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
        </form>
    </div>
</div>
</div>
</section>
@endsection
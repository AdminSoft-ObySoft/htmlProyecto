@extends('layoutB.layout')
@section('title', 'Listar Roles')

@section('content')
<section class="content">
<div class="d-flex justify-content-end mt-4">
  <div class="card-table col-sm-6 p-1">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar....">
      <button class="btn btn-primary" type="button"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
     </div>
  </div>
  <div class="card-table col-sm-0.5 p-1">
    <a class="btn btn-primary" type="button" href="/home-roles-create"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>






<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
          <th>Perfil</th>
          <th>Módulo</th>
          <th>Permiso módulo</th>
          <th>Opciones disponibles</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Administrador</td>
          <td>Usuarios</td>
          <td>Crear</td>
          <td>Editar, Eliminar, Crear</td>
          <td>Activo</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</section>

@endsection
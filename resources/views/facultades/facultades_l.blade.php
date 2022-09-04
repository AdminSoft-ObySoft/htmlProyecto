@extends('layoutB.layout')
@section('title', 'Listar Facultades')

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
    <a class="btn btn-primary" type="button" href="/home-facultades-create"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>






<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
          <th>Facultad</th>
          <th>Carrera</th>
          <th>Asignatura</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Facultad de ciencias matematicas y fisicas</td>
          <td>Ingenieria en sistemas</td>
          <td>Matemática</td>
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
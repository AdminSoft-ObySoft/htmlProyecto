@extends('layoutB.layout')
@section('title', 'Listar tutorias')

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
    <a class="btn btn-primary" type="button" href="/home-tutorias-create"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>






<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
          <th>Carrera</th>
          <th>Asignatura</th>
          <th>Semestre</th>
          <th>Tutor</th>
          <th>Tema</th>
          <th>Horarios</th>
          <th>Estudiantes máximo</th>
          <th>Estudiantes existentes</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ingenieria en sistemas</td>
          <td>Matemática</td>
          <td>8 semestre</td>
          <td>Ing Rafael Marin</td>
          <td>Desarrollo de sistema web para restaurante</td>
          <td>20:00 - 22:00</td>
          <td>5</td>
          <td>2</td>
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
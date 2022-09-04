@extends('layoutB.layout')
@section('title', 'Listar Usuario')

@section('content')
<section class="content">
<div class="d-flex justify-content-end mt-4">
  <div class="card-table col-sm-12 p-1">
    <form action="" class="row g-3">
        <div class="col-lg-3">
            <!-- <label class="form-label" for="perfil">Perfil</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <select class="form-select perfil-select" name="perfil">
                    <option selected>Selecciona perfil</option>
                    <option value="2">Tutor</option>
                    <option value="3">Estudiante</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- <label class="form-label" for="perfil">Estado</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <select class="form-select perfil-select" name="perfil">
                    <option selected>Selecciona estado</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="col-lg-5">
            <!-- <label class="form-label" for="nombre">Nombre</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
        </div>
        <div class="col-lg-1">
          <button class="btn btn-primary btn-block" type="button"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
        </div>
    </form>
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
          <th>Perfil</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        <tr>
          <td>Ravi</td>
          <td>Ravi Ranjan Prakash</td>
          <td>0952457854</td>
          <td>rrnjan</td>
          <td>rrnjan@ug.edu.ec</td>
          <td>Administrador</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span>
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

</section>

@endsection
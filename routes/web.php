<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.layout');
});

Route::get('/login', function () {
    return view('login.layout');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/recuperar-contraseña', function () {
    return view('login.recuperarPassword');
});

Route::get('/inicio', function () {
    return view('layout.layout');
});

Route::get('/inicio2', function () {
    return view('layout.layout2');
});

Route::get('/crear-usuario', function () {
    return view('usuario.usuario_crear');
});

Route::get('/listar-usuario', function () {
    return view('usuario.usuario_lista');
});


Route::get('/crear-facultades', function () {
    return view('facultades.facultades_crear');
});

Route::get('/listar-facultades', function () {
    return view('facultades.facultades_lista');
});


Route::get('/crear-asignaturas', function () {
    return view('asignaturas.asignaturas_crear');
});

Route::get('/listar-asignaturas', function () {
    return view('asignaturas.asignaturas_lista');
});

Route::get('/crear-tutorias', function () {
    return view('tutorias.tutorias_crear');
});

Route::get('/listar-tutorias', function () {
    return view('tutorias.tutorias_lista');
});

Route::get('/crear-roles', function () {
    return view('roles.roles_crear');
});

Route::get('/listar-roles', function () {
    return view('roles.roles_lista');
});

Route::get('/perfil', function () {
    return view('perfil.perfil');
});


Route::get('/home', function () {
    return view('layoutB.layout');
});

Route::get('/home-user-create', function () {
    return view('usuario.usuario_c');
});

Route::get('/home-user-list', function () {
    return view('usuario.usuario_l');
});

Route::get('/home-roles-create', function () {
    return view('roles.roles_c');
});

Route::get('/home-roles-list', function () {
    return view('roles.roles_l');
});

Route::get('/home-facultades-create', function () {
    return view('facultades.facultades_c');
});

Route::get('/home-facultades-list', function () {
    return view('facultades.facultades_l');
});

Route::get('/home-asignaturas-create', function () {
    return view('asignaturas.asignaturas_c');
});

Route::get('/home-asignaturas-list', function () {
    return view('asignaturas.asignaturas_l');
});

Route::get('/home-tutorias-create', function () {
    return view('tutorias.tutorias_c');
});

Route::get('/home-tutorias-list', function () {
    return view('tutorias.tutorias_l');
});

Route::get('/home-tutorias-buscar', function () {
    return view('tutorias.tutorias_b');
});

///home-pruebas-list


Route::get('/home-tutorias-solicitud', function () {
    return view('tutorias.solicitud_tutoria');
});

Route::get('/home-actividades-manuales', function () {
    return view('actividades.actividades_m');
});

Route::get('/home-actividades-predefinidas', function () {
    return view('actividades.actividades_d');
});

Route::get('/home-pruebas-crear', function () {
    return view('pruebas.pruebas_c');
});

Route::get('/home-notas-evaluacion', function () {
    return view('pruebas.notas_evaluacion');
});

Route::get('/home-perfil', function () {
    return view('perfil.ver_perfil');
});
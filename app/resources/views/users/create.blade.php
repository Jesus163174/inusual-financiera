@extends('layouts.admin')
@section('title','Usuarios')
@section('content')
<div class="row top-md">
    <div class="col-lg-12">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Registrar Usuario</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <div class="col">
                            <form action="{{asset('admin/usuarios')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="feFirstName">Nombre</label>
                                        <input type="text" required name="name" class="form-control" id="feFirstName"
                                            placeholder="Nombre completo" value="{{$user->name}}"> </div>
                                    <div class="form-group col-md-6">
                                        <label for="feLastName">Email</label>
                                        <input type="email" required name="email" class="form-control" id="feLastName"
                                            placeholder="Last Name" value="{{$user->email}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="feLastName">Contraseña</label>
                                        <input type="password" required name="password" class="form-control" id="feLastName"
                                            placeholder="Contraseña" value="{{$user->email}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="feLastName">Rol</label>
                                        <select name="rol" id="" class="form-control">
                                            <option value="{{$user->rol}}" selecte>Selecciona un rol</option>
                                            <option value="admin">1.Administrador</option>
                                            <option value="cobrador">2.Cobrador</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button
                                            class="mb-2 btn btn-sm btn-pill btn-outline-success mr-2">Agregar</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@stop
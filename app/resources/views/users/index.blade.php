@extends('layouts.admin')
@section('title','Usuarios')
@section('content')
    <div class="row top-md">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            @include('layouts.card',['title'=>'Listado de usuarios','data'=>'users.data'])
        </div>
    </div>
@stop
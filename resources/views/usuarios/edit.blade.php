@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Editar {{ $usuario->nombre }}</h4>
            </div>
            <div class="panel-body">
                {!! BootForm::open(['route' => ['usuarios.update',$usuario->id], 'method' => 'PATCH'])!!}
                {!! BootForm::text('nombre', 'Nombre:', $usuario->nombre) !!}
                {!! BootForm::text('correo', 'Correo:', $usuario->correo) !!}
                {!! BootForm::text('telefono', 'Telefono:', $usuario->telefono) !!}
                <button type="submit" class="btn btn-success" title="Guardar"><i class="fa fa-save"></i></button>
                <a href="{{route('usuarios.index')}}" class="btn btn-danger" title="Cancelar"><i class="fa fa-times"></i></a>
                {!! BootForm::close()!!}
            </div>
        </div>
    </div>
@endsection
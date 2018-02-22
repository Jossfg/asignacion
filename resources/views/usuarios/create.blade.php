@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Crear Usuario</h3>
            </div>
            <div class="panel-body">
                {!! BootForm::open(['route'=> 'usuarios.store']) !!}
                    {!! BootForm::text('nombre','Nombre:') !!}
                    {!! BootForm::email('correo','Correo:') !!}
                    {!! BootForm::text('telefono','Telefono:') !!}
                    <button class="btn btn-success" title="Guardar" type="submit"><i class="fa fa-save"></i></button>
                    <a href="{{route('usuarios.index')}}" class="btn btn-danger" title="Cancelar"><i class="fa fa-times"></i></a>
                {!! BootForm::close()!!}
            </div>
        </div>
    </div>
@endsection
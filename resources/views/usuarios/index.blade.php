@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="pull-left">Usuarios </h4>
            <a class="btn btn-primary pull-right" href="{{route('usuarios.create')}}" title="Crear"><i class="fa fa-plus"></i></a>
            <div class="clearfix"></div>            
        </div>
        <div class="panel-body">
            @if(count($usuarios) > 0)
            <table class="table table-fixed">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Acciones</th>                                
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->correo}}</td>
                        <td>{{$usuario->telefono}}</td>
                        <td>
                            <a class="btn btn-success pull-left" href="{{route('usuarios.edit', $usuario->id)}}" title="Editar" ><i class="fa fa-edit"></i></a>
                            {!! Form::open(['route'=>['usuarios.destroy',$usuario->id], 'method'=>'DELETE'])!!}
                            &nbsp;&nbsp;
                            <button class="btn btn-danger pull-rigth" onclick="return confirm('Estas seguro de eliminar este usuario?')" title="Eliminar"><i class="fa fa-remove"></i></button>
                            {!! Form::close()!!}
                            <div class="clearfix"></div>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="jumbotron">
                <h3>No hay usuarios</h3> 
            </div>
            @endif
        </div>
    </div>
    @endsection
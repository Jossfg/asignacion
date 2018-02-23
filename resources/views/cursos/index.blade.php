@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="pull-left">Cursos</h4>
                <a class="btn btn-primary pull-right" href="{{route('cursos.create')}}"><i class="fa fa-plus"></i></a>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                @if (count($cursos) > 0)
                    <div class="table-responsive">
                        <table class="table table-fixed">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cursos as $curso)
                                <tr>
                                    <td>{{$curso->id}}</td>
                                    <td>{{$curso->nombre}}</td>
                                    <td>{{$curso->descripcion}}</td>
                                    <td>
                                    <a class="btn btn-success" href="{{route('cursos.edit',$curso->id)}}"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="jumbotron">
                        <h3>No hay cursos.</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Crear curso</h3>
            </div>
            <div class="panel-body">
                {!! BootForm::open(['route' => 'cursos.store', 'id' => 'formularioCurso']) !!}
                {!! BootForm::text('nombre','Nombre:') !!}
                {!! BootForm::textarea('descripcion','Descripcion:') !!}
                {!! BootForm::submit('Guardar') !!}
                {!! BootForm::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#formularioCurso').validate({
            submitHandler: function(form) {
                $(form).ajaxSubmit();
            },
            rules:{
                nombre: 'required',
                descripcion: 'required'
            },
            messages: {
                nombre: 'El nombre del curso es requerido',
                descripcion: 'La descripcion es requerida'
            }
        });
    })
</script>
@endsection
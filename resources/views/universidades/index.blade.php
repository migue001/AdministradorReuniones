@extends('layouts.app')
@section('content')
<div class="container">
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('instituciones/create')}}" class="btn btn-successs">Registrar nueva universidad</a>
<br>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la Universidad</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($universidad as $universidades)
        <tr>

            <td>{{$universidades->id}}</td>
            <td>{{$universidades->universidad}}</td>
            
            <td>
                <a href="{{ url('/universidades/'.$universidades->id.'/edit') }}" class="btn btn-warning">Editar</a>
                
                
                <form action="{{url('/universidades/'.$universidades->id)}}" method="post" class="d-inline">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Quieres Borrar?')" value="Borrar" class="btn btn-danger">
                </form>
                <a href="{{ url('/universidades/'.$universidades->id.'/edit') }}" class="btn btn-primary">Crear Institucion</a>

            </td>
            @endforeach
        </tr>
    </tbody>

</table>

</div>
{!! $universidad->links() !!}
@endsection
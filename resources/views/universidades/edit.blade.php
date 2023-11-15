@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/universidades/'.$universidad->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('universidades.form',['modo'=>'Editar']);
</form>
</div>
@endsection
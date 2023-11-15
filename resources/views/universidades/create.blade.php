@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/universidades') }}" method="post">
    @csrf
    @include('universidades.form',['modo'=>'Crear']);
</form>
</div>
@endsection
<h1>{{$modo}} Universidad </h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>

@foreach($errors->all() as $error)
      <li> 
         {{$error}}
      </li>
    @endforeach
    </ul>
</div>

@endif
<br>
<div class="form-group">
<label for="nombre">Nombre de la Universidad</label>
<br>
<br>
<input type="text" class="form-control" name="universidad" id="universidad" value="{{isset($universidad->universidad)?$universidad->universidad:old('Universidad')}}">
</div>
<br>
<br>
<input type="submit" value="{{$modo}} universidad" class="btn btn-success">
<br>
<br>
<br>
<a href="{{url('universidades/')}}" class="btn btn-primary">Regresar</a>
@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Nombre <span>  Tipo<span> </h4>
    <p>Jugador</p>
  </div>
</div>
@if(count($lideres) == 0)
<div class="alert alert-success"> 
   <span>Listado vacio </span>
</div> 
@endif 

@if(session('status'))
<div class="alert alert-success"> 
   {{ session('status')}}
</div> 
@endif 

@foreach($lideres as $lider)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $lider->id}}</i></div>
  <div class="col-md-10">
  <div class="speaker">
  <a href="{{route('lideres.show',$lider->id)}}" >_VER</a>
    </div>
    <h4>{{ $lider->nombre}} <span> {{ $lider->tipo}}</span></h4>
  
  </div>  
  </div>   
@endforeach


</div> 
@endsection
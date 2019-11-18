@extends('layouts.form') 
@section('contactame')

<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  


    @if ($errors->any())
       <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    
   <div class="section-header">
      <h2>Registrarse para ser lider</h2>
      <p>Escoge el elemento que usaras</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>NOMBRE</h3>
          <address>MAXIMO</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>TIPO</h3>
          <address>Fantasma</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Contendiente</h3>
          <address>Gary</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
    @if(isset($lideres))  
      <form action="{{route('lideres.update',$lideres->id)}}" method="POST"  > 
      @method('PATCH')
    @else 
      <form action="{{route('lideres.store')}}" method="POST" > 
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$lideres->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
        </div>
        <div class="form-group col-md-6"> 
          <input type="text" name="tipo" value="{{$lideres->tipo ?? ''}}" class="form-control" id="tipo" placeholder="Tipo">
        </div>
      </div>
      

      <div class="text-center"><button type="submit">ENVIAR</button></div> 
      </div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 

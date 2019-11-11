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
          <address>GARY</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>EDAD</h3>
          <address>12</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>FECHA</h3>
          <address>1</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
    @if(isset($jugadores))  
      <form action="{{route('jugadores.update',$jugadores->id)}}" method="POST"  > 
      @method('PATCH')
    @else 
      <form action="{{route('jugadores.store')}}" method="POST" > 
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$jugadores->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
        </div>
        <div class="form-group col-md-6"> 
          <input type="number" name="edad" value="{{$jugadores->edad ?? ''}}" class="form-control" id="edad" placeholder="Edad">
        </div>
      </div>
      

      <div class="text-center"><button type="submit">ENVIAR</button></div> 
      </div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 

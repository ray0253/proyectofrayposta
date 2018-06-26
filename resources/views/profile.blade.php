@extends('layouts.app')

@section('content')
  <div class="container">
    <!-- Incluir Header por PHP -->

    <!-- Contenido -->
    <div class="sub-container">

      <!-- titulo seccion -->
      <div class="titulo-seccion">
        <h2>Bienvenido {{Auth::user()->name}}</h2>
      </div>

      <!-- formulario -->
      <div class="modulo-form trama">
          <div class="formulario perfil">
            <div class="avatar" >
              <img src="storage/app/{{Auth::user()->imagen}}" alt="">

            <!--img src="{{Auth::user()->imagen}}" alt=""-->
          </div>
            <div class="datos">
              <p>Nombre:<br> {{Auth::user()->name}} </p>
              <p>Email:<br> {{Auth::user()->email}}</p>

            </div>
          </div>
        </div>
      </div>

      <!-- Fin Contenido -->

      <!-- Incluir Footer por PHP -->

    </div>

  </div>
@endsection
 

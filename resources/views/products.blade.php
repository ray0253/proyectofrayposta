
@extends ("layouts.app")
  @section("content")

  <div class="container">
    <!-- Incluir Header por PHP -->

    <!-- Contenido -->
    <div class="sub-container">

      <!-- titulo seccion -->
      <div class="titulo-seccion">
        <h2>Productos</h2>
      </div>

      <!-- preguntas -->

        <!-- preguntas -->


          @foreach ($products as $key => $value)
            <div class="producto">
              <div class="contenedor_productos">
            @if(isset($products))

              <ul>
                <li><label for="nombre_producto"><h1>{{$value['name']}}</h1></label></li>
                <li><label for="description_producto"><h2>{{$value['description']}}</h2></label></li>
                <li><label for="valor_producto"><h2>${{$value['valor']}}</h2></label></li>
              </ul>

              <div class="botones">
                <a href="/products"><i class="fas fa-shopping-cart"></i> Comprar</a>
              </div>

            <img src="/img/productos/{{$value['imagen']}}" alt="{{$value['imagen']}}" style="width:300px; height:160px">
              </div>
            </div>
          @endif
          @endforeach
          <div class="paginacion" style="">

            {{ $products->links() }}
          </div>





    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->

  </div>
@endsection


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
      <div class="contenedor-preguntas">
        <!-- preguntas -->

          <form class="" action="/products-admin" method="post" enctype="multipart/form-data">
            @csrf
            <input placeholder="Nombre Producto" type="text" name="name" value="">
            <input placeholder="info Producto" type="text" name="description" value="">
            <input placeholder="Precio Producto" type="text" name="valor" value="">
            <input type="file" name="imagen" value="">
            <button type="submit" name="button">cargar</button>
          </form>
<div class="pregunta">
          @foreach ($products as $key => $value)

            @if(isset($products))
              <div class="contenedor_productos">

            <a href="/products-admin/{{$value['id']}}"><strong>ELIMINAR</strong></a>

              <label for="nombre_producto"><h1>{{$value['name']}}</h1></label>
              <label for="description_producto"><h2>{{$value['description']}}</h2></label>
              <label for="valor_producto"><h2>${{$value['valor']}}</h2></label>

            <img src="/img/productos/{{$value['imagen']}}" alt="{{$value['imagen']}}" style="width:300px; height:160px">

              </div>
</div>
          @endif
          @endforeach


    </div>

    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->

  </div>
@endsection

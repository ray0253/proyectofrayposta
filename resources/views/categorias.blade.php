<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="addCategorias">
      <hr>
      <h2>addCategorias</h2>

      <form class="" action="/admin/categorias" method="POST">
        @csrf
        <label for="">categorias</label>
        <table>
          <tr>
            <th>nombre</th>
          </tr>
          <tr>
            <td><input placeholder="categoria" type="text" name="name" value=""></td>

          </tr>
        </table>
        <button type="submit" name="button">cargar</button>
      </form>
      @foreach ($categorias as $key => $value)
        @if(isset($categorias))
        <a href="categorias/{{$value['id']}}"> {{$value['name']}} </a>

      @endif
      @endforeach
  </body>
</html>

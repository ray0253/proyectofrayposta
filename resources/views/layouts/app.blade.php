<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <a href="/" class="logo"><img src="img/logo.png" alt="The Boarding House Snow & Skate"/></a>
      <nav>
        <div class="searchBar">

          <input type="search" placeholder="Search" name="search" value="" style="width: 252px;height: 32px;">
          <a href="#"><i style="color:grey; padding-left:15px"class="fas fa-search"></i></a>



        </div>
        <ul>

          <li><a href="/">Home</a></li>
          <li><a href="/products">Productos</a></li>
          <li><a href="/faq">FAQ</a></li>

          @if(!Auth::check())

          <li><a href="/register">Registrarse</a></li>
          <li><a href="/login">Login</a></li>

          @else

          <li><a href="/home"><i class="fas fa-user-circle iconuser"></i> {{Auth::user()->nombre}} </a></li>
          <li class="/cart"><a href="login"><i class="icono fas fa-shopping-cart"></i></a></li>
          <li><a href="deslogear">Logout</a></li>
          @endif

        </ul>
      </nav>
    </header>
    @yield('content')

<!--<footer></footer>-->
<footer>
<div class="footer-side1">
<a href="/" class="logo"><img src="img/logo-blanco.png" alt="The Boarding House Snow & Skate"/></a>
<p>© 2018. Todos los derechos reservados.</p>
</div>
<div class="footer-side2">
<ul>
  <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
  <li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></li>
  <li><a href="https://pinterest.com/"><i class="fab fa-pinterest-square"></i></a></li>
</ul>
</div>
</footer>
  </body>
</html>

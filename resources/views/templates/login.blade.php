<!-- Cuerpo principal del documento -->

<!DOCTYPE html>
<html lang="en">
  
  <head>

    <title> @yield('title') </title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/main.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('header')

  </head>
  <body>

    <!-- Componentes del cuerpo del documento -->
    @yield('body')

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Scripts extras -->
    @yield('scripts')

  </body>

</html>
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

		<!-- Navegation -->
		<nav class="nav-extended">
			<div class="nav-wrapper white">
				
				<a href="/" class="brand-logo black-text flex">
					<img src="images/system/data-chart.png" alt="books" class="s-img">
					<span class="black-text title-text">Class Control</span>
				</a>

				<a href="#" data-activates="mobile-demo" class="green-text button-collapse"><i class="material-icons">menu</i></a>
				
				<ul class="right hide-on-med-and-down">
		
					<li>
						<a href="/profile" class="black-text pointer">Perfil</a>
					</li>
					<li>
						<a href="/set-task" class="black-text pointer">Asignación de Tareas</a>
					</li>
					<li>
						<a href="/show-task" class="black-text pointer">Revisión de tareas</a>
					</li>
					<li>
						<a href="/add-task" class="black-text pointer">Nuevas Tareas</a>
					</li>
					<li>
						<a href="/policies" class="black-text pointer">Políticas</a>
					</li>
					<li>
						<a href="/schedule" class="black-text pointer">Horario</a>
					</li>
					<li>						
						<a href="/notifications" class="black-text pointer flex">
							<i class="material-icons">chat_bubble</i>
							<span style="margin-left: 1rem">Notificaciones</span>

							<!--span id="notify-state" class="new badge red accent-3">1</span-->

						</a>
					</li>

				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li class="center">
						<img src="images/system/flat-grades.png" alt="books" class="m-img">
						<h5 class="black-text">Selecciona una opción</h5>
					</li>
					<li>
						<a href="/profile" class="black-text pointer">Perfil</a>
					</li>
					<li>
						<a href="/set-task" class="black-text pointer">Asignación de Tareas</a>
					</li>
					<li>
						<a href="/view-tasks" class="black-text pointer">Revisión de tareas</a>
					</li>
					<li>
						<a href="/new-task" class="black-text pointer">Nuevas Tareas</a>
					</li>
					<li>
						<a href="/policies" class="black-text pointer">Políticas</a>
					</li>
					<li>
						<a href="/schedule" class="black-text pointer">Horario</a>
					</li>
					<li>
						<a href="/notifications" class="black-text pointer">Notificaciones</a>
					</li>
				</ul>
			</div>
		</nav>


		<!-- Componentes del cuerpo del documento -->
		@yield('body')



		<!-- Footer -->
		<footer class="page-footer blue darken-4">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Class Control</h5>
						<p class="grey-text text-lighten-4">
							Sistema para el control del programa educativo de Ingeniería en desarrollo de software
						</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Sitios de interés</h5>
						<ul>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									Link 1
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									Link 1
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									Link 1
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					© 2017 Copyright DevCandle Tech.
					<a class="grey-text text-lighten-4 right" href="#!">
						upchiapas.edu.mx
					</a>
				</div>
			</div>
		</footer>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="js/main.js"></script>
		<!-- Scripts extras -->

		@yield('scripts')

	</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Videos Lens</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>    

	<!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Materialize.css-->
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="navbar-fixed">
	  	<nav>
	  	    <div class="container-fluid">
	  	    	<div class="row">
	  	    		<div class="col s12">
	  	    			<div class="nav-wrapper">
	  	    				<a href="#!" class="brand-logo"><img src="img/logo_transparente.png" alt=""></a>
	  	    			  
	  	    			  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	  	    			  <ul class="right hide-on-med-and-down">
	  	    			  	<li><a href="#">Español/Spanish</a>
	  	    			    <li><a href="#">Inglés/English</a></li>
	  	    			  </ul>
	  	    			  <ul class="side-nav" id="mobile-demo">
	  	    			  	<li><a href="#">Español/Spanish</a>
	  	    			    <li><a href="#">Inglés/English</a></li>
	  	    			  </ul>
	  	    			</div>
	  	    		</div>
	  	    	</div>
	  	    </div>
	  	  </nav>
	  </div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="title">Push-V Glasses</h1>
					<p></p>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h3 class="title">Videos</h3>
					 <table class="centered highlight">
					  <thead>
					    <tr>
					        <th data-field="download">Descargar</th>
					        <th data-field="name">Video</th>
					        <th data-field="date">Fecha</th>
					        <th data-field="size">Tamaño</th>
					        <th data-field="delete">Borrar</th>
					    </tr>
					  </thead>

					  <tbody>

					  <?php include ("carga_tabla.php"); ?>
					    
					  </tbody>
					</table>
            
				</div>
			</div>
			<div class="row">
				<hr>
			</div>
			<div class="row">
				<div class="col s4">
					<h5 class="center-align title">Descargar Todo</h5>
				</div>		
				<div class="col s2">
					<a class='btn btn-large waves-effect waves-light' href="descargar_todos.php"><i class="material-icons">file_download</i></a>
				</div>
				<div class="col s4">
					<h5 class="center-align title">Eliminar Todo</h5>
				</div>		
				<div class="col s2">
					<a class="btn btn-large waves-effect waves-light" href="borrar_archivos_directorio.php"><i class="material-icons">delete_forever</i></a>
				</div>
			</div>	
		</div>
	</section>

	<section class="progreso">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h3 class="title">Espacio Disponible</h3>
					<div class="progress">
						<div class="determinate"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<p>©<a src="www.pushtek.com">Pushtek</a> - 2016</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- Js y jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="https://use.fontawesome.com/8d57eaf1a3.js"></script>

</body>
</html>

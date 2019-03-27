

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="CSS/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="CSS/custom.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Home</title>
</head>
<header>
	<div class="row">
		<div class="offset-1 col-10">
			<img id="img_header" class="mx-auto d-block" src="image/header.png">
		</div>
	</div>
</header>
<body>
	<div class="container">
		<div class="row border">
				<nav class="navbar navbar-inverse nav-pills nav-fill col-12">
			    	<button class="btn btn-link"><a class="nav-item nav-link" href="index.html">Acceuil</a></button>
			    	<button class="btn btn-link"><a class="nav-item nav-link active" href="recherche.php">Recherche</a></button>
			    	<button class="btn btn-link"><a class="nav-item nav-link" href="#">Contact</a></button>
				</nav>
	   	</div>
		<br>
		<div id="content_search" class="row">
			<nav id="nav-animal" class="navbar navbar-inverse nav-pills nav-fill col-12 border">
				<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    				Espèce
		  				</button>
		  			<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					    <button class="dropdown-item" type="button">Action</button>
					    <button class="dropdown-item" type="button">Another action</button>
					    <button class="dropdown-item" type="button">Something else here</button>
		  			</div>
				</div>
				<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    				Race
		  				</button>
		  			<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					    <button class="dropdown-item" type="button">Action</button>
					    <button class="dropdown-item" type="button">Another action</button>
					    <button class="dropdown-item" type="button">Something else here</button>
		  			</div>
				</div>
			</nav>
			<div class="row">
				<div class="col-lg-4 col-sm-12 border padding-left max">
					<div class="col-12">
						<img class="img-fluid" src="image/img_home.jpg">
					</div>
					<div class="btn-group btn-group-toggle col-12">
						<button class="btn btn-info">Information</button>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 border padding-left max">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aut, quisquam nemo nulla incidunt dicta quos minus. Amet molestiae, officia molestias explicabo distinctio aspernatur, est facilis voluptate, rerum laudantium non.
				</div>
				<div class="col-lg-4 col-sm-12 border padding-left max">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi natus, minima tempore vero assumenda quidem! Facere id repudiandae ducimus debitis at eos eum unde maiores, provident nihil molestias ad a.
				</div>






			</div>
		</div>

	</div>	
</body>
</html>
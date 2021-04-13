<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vitorlás</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
	<script src="script.js"></script>
	
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            background-color: black;
            color: white;
        }
        img{
            width: 200px;
        }
    </style>
              
</head>

<body>


<nav class="navbar navbar-expand-lg bg-light">
  <a class="navbar-brand" href="#">Bérlés</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php?p=fooldal.php">Főoldal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=napi.php">Napi díj személyre</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=bevet.php">Bevételek</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=insert.php">Új hajó</a>
			</li>
		</ul>
  </div>

</nav>


    <div class="container mt-3 bg-light">
		<?php
			if(isset($_GET['p'])){
				include $_GET['p'];
			}
			else include "fooldal.php";
		?>
	</div>	
           
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>  
</body>
</html>      
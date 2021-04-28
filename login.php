
<?php 
	session_start();
	require 'config.php'
?>

<?php 

	if (isset($_COOKIE['test']) && isset($_COOKIE['my'])) {
		$test = $_COOKIE['test'];
		$my = $_COOKIE['my'];

		$sql = "SELECT username FROM pw_users WHERE id='$test'";
		$result = mysqli_query($conn, $sql);

		if ($my=hash("sha256", $dt['username'])) {
			$_SESSION['submit']=true;
		}
	}

	if (isset($_SESSION['submit'])) {
	 	header('location : index.php');
	}
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = mysqli_query($conn, "SELECT * FROM pw_users WHERE username='$username'");
		mysqli_num_rows($data);
		if ($dt=mysqli_fetch_assoc($data)) {
			if (password_verify($password, $dt['password'])) {

				$_SESSION['submit']=true;
				if (isset($_POST['remember'])) {
					setcookie("test", $dt['id'], time()+3600);
					setcookie("my",hash("sha256", $dt['username']), time()+3600);
				}
				header('location: index.php');
			}
		}
	}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>PW | Login</title>
  </head>
  <body>

  	<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm fixed-top">
  		<div class="container">
  			<img src="img/your-logo.png" style="width: 8em">
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent"  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    			<form class="d-flex navbar-nav" action="" method="post" enctype="multipart/form-data">
			 	<ul class="navbar-nav mb-lg-0 p-2">
			 		<li class="nav-item text-center">
			 			<a href="j" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
			 		</li>
			 	</ul>
			    <button class="btn btn-outline-success btn-lg" type="submit" ><a href="Join.php">Join Now!</a></button>
			</form>
    		</div>
  		</div>
	 </nav>
   <!-- last navbar -->

   <!-- carousel -->
   <div class="bg-secondary mt-5">
   	<section class="jumbotron">
  		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/4.jpg" class="d-block w-100" alt="img1">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Third slide label</h5>
		        <p>Some representative placeholder content for the third slide.</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="img/2.jpg" class="d-block w-100" alt="img2">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Third slide label</h5>
		        <p>Some representative placeholder content for the third slide.</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="img/5.jpg" class="d-block w-100" alt="img4">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Third slide label</h5>
		        <p>Some representative placeholder content for the third slide.</p>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	 </section>
   </div>
   <!-- last carousel -->

   <!-- card -->
   <div class="container mt-3">
   	<div class="row ms-3 p-4">
   		<div class="col-md-3 mb-2 p-4">
   			<div class="card bg-secondary" style="width: 15rem;">
			  <img src="img/3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>
   		</div>
   		<div class="col-md-3 mb-2 p-4">
   			<div class="card bg-secondary" style="width: 15rem;">
			  <img src="img/3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>
   		</div>
   		<div class="col-md-3 mb-2 p-4">
   			<div class="card bg-secondary" style="width: 15rem;">
			  <img src="img/3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>
   		</div>
   		<div class="col-md-3 mb-2 p-4">
   			<div class="card bg-secondary" style="width: 15rem;">
			  <img src="img/3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>
   		</div>
   	</div>
   </div>
   <!-- last card -->

   <!-- modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content mt-5">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <!-- form -->
	        <form action="" method="post" class="container" >
	        	<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Username</label>
				  <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Username">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Password</label>
				  <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Password">
				</div>
				<div class="form-check">
				  <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckDefault">
				  <label class="form-check-label" for="flexCheckDefault">
				    Remember me
				  </label>
				</div>
				<div class="d-grid gap-2 col-6 mx-auto p-4">
				  <button class="btn btn-primary" type="submit" name="submit">Masuk</button>
				</div>
	        </form>
	        <!-- last form -->
	      </div>
	    </div>
	  </div>
	</div>
   <!-- last modal -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
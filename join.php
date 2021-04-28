
<?php require 'config.php'; ?>

<?php 
    if (isset($_POST['kirim'])) {
        $ok1 = regs($_POST);

        if ($ok1) {
            header('location: login.php?status=sukses');
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

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>

  	<!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm fixed-top">
  		<div class="container">
  			<img src="img/your-logo.png" style="width: 8em">
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     			<span class="navbar-toggler-icon"></span>
    		</button>
  		</div>
	 </nav>
   <!-- last navbar -->
    
    <!-- jumbtron -->
    <div class="jumbotron mt-5 bg-secondary">
	  <h1 class="display-4 text-center p-4 shadow-lg text-light">Patrik william</h1>
	  <p class="lead text-center p-2 text-light">welcome To my website, gabung untuk planing time</p>
	  <hr class="my-4">
	</div>
    <!-- last jumbtron -->

    <!-- form -->
    <form action="" method="post" enctype="multipart/form-data">
    	<div class="row">
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 text-center">
				 <h3>Registrasi your Account</h3>
				 <hr style="height: 0.4em" class="mt-2">
				</div>
    		</div>
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 mx-3">
				  <input type="hidden" class="form-control" id="id" name="id">
				</div>
    		</div>
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 mx-3">
				  <label for="nama" class="form-label ">Nama Lengkap</label>
				  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
				</div>
    		</div>
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 mx-3">
				  <label for="username" class="form-label ">Username</label>
				  <input type="text" name="username" class="form-control" id="username" placeholder="Username">
				</div>
    		</div>
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 mx-3">
				  <label for="password" class="form-label ">Password</label>
				  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				</div>
    		</div>
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 mx-3">
				  <label for="konfirmasi_password" class="form-label ">Konfirmasi Password</label>
				  <input type="password" name="konfirmasi_password" class="form-control" id="konfirmasi_password" placeholder="konfirmasi password">
				</div>
    		</div>
    		<div class="col-md-3 offset-md-3">
    			<div class="mb-3">
				  <label for="img" class="form-label ">Foto Profile</label>
				  <input type="file" name="img" class="form-control" id="img" placeholder="konfirmasi password">
				</div>
    		</div>
    		<div class="col-md-6 offset-md-3">
    			<div class="mb-3 mx-3">
				 	<button type="submit" name="kirim" class="btn btn-primary">Kirim!</button>
					<button type="cancel" name="batal" class="btn btn-secondary">Batal!</button>
				</div>
    		</div>
    	</div>
    </form>
    <!-- last form -->

    <!-- footer -->
    <footer class="bg-secondary">
    	<div class="text-center">
    		<h5>create with love <a href="#">patrik william</a></h5>
    	</div>

    </footer>
    <!-- last footer -->

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
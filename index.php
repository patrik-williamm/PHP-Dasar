
<?php 
  session_start();
  require 'config.php'; 
?>
  
<?php 
  if (!$_SESSION['submit']) {
    header('location: login.php');
  }
  //view ipk
  $ipk = view("SELECT * FROM pw_ipk");

  // view kegaiatan
  $Kegiatan = view("SELECT * FROM pw_kegiatan");

  // view taks
  $task = view("SELECT * FROM pw_tugas");
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

    <title>hello world</title>
  </head>
  <body>
   <!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm fixed-top">
  		<div class="container">
  			<img src="img/your-logo.png" style="width: 8em">
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			<li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="#">Home</a>
       	 			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="#">About</a>
        			</li>
       				<li class="nav-item">
          				<a class="nav-link" aria-current="page" href="#">Contact</a>
        			</li>
      			</ul>
      			<form class="d-flex">
        			<button class="btn btn-outline-success" type="submit"><a href="logOut.php">Keluar</a></button>
     	 		</form>
    		</div>
  		</div>
	 </nav>
   <!-- last navbar -->

   <!-- jumbotron -->
   <!-- php code -->
   <?php 
      $img = view("SELECT * FROM pw_users")[0];
   ?>
   <!-- last php code -->
   <div class="ok3 bg-secondary mt-3">
   	<section class="jumbotron text-center p-4">
   		<div class="img mt-5">
   			<img src="img/<?= $img['img_profile'] ?>" class="rounded-pill border border-warning w-2">
   		</div>
  		<h5 class="display-6 fw-light text-lightk"><?= $img['nama'] ?></h5>
  		<p class="lead fw-light text-light">colleger | Proggramer</p>
	 </section>
	 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,245.3C320,267,400,277,480,240C560,203,640,117,720,106.7C800,96,880,160,960,160C1040,160,1120,96,1200,101.3C1280,107,1360,181,1400,218.7L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
   </div>
   <!-- last jumbotron -->

   <!-- Thumbnails -->
   <div class="bg-warning">
	   	<div class="text-center">
	   		<h3>Menu</h3>
	   		<hr style="height: 0.4em">
	   	</div>
	   	<div class="container">
	   		<div class="row ms-3">
		   		<div class="col-md-4 mb-2 p-4">
		   			<div class="card" style="width: 18rem;">
		  				<div class="card-body bg-secondary text-light">
		  				  <h5 class="card-title">IPK</h5>
		  				  <h6 class="card-subtitle mb-2">Indeks Prestasi Kumulatif</h6>
		  				  <p class="card-text">
		  				  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  				  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
		  				  </p>
		  				  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Primary</button>
						</div>
		   			</div>
		   		</div>
		   		<div class="col-md-4 mb-2 p-4">
		   			<div class="card" style="width: 18rem;">
		  				<div class="card-body bg-secondary text-light">
		  				  <h5 class="card-title">Kegiatan</h5>
		  				  <h6 class="card-subtitle mb-2">Kegiatan</h6>
		  				  <p class="card-text">
		  				  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  				  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
		  				  </p>
		  				  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Primary</button>
						</div>
		   			</div>
		   		</div>
		   		<div class="col-md-4 mb-2 p-4">
		   			<div class="card" style="width: 18rem;">
		  				<div class="card-body bg-secondary text-light">
		  				  <h5 class="card-title">Tugas</h5>
		  				  <h6 class="card-subtitle mb-2">Tugas Mata Kuliah</h6>
		  				  <p class="card-text">
		  				  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  				  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
		  				  </p>
		  				  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Primary</button>
						</div>
		   			</div>
	   			</div>
	   		</div>
	   	</div>
	   	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,64L60,90.7C120,117,240,171,360,202.7C480,235,600,245,720,218.7C840,192,960,128,1080,117.3C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  	</div>
   <!-- last Thumbnails -->

   <!-- about me -->
   <div class="bg-secondary">
   	<div class="text-center p-4">
   		<h3>About Me</h3>
   		<hr style="height: 0.4em" class="bg-warning">
   	</div>
   	<div class="container">
   		<div class="row mx-3 text-center">
   			<div class="col-md-6">
   				<p class=" lh-lg bg-warning rounded rounded-3 text-dark fs-6 fw-bolder">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   				</p>
   			</div>
   			<div class="col-md-6">
   				<p class=" lh-lg bg-warning rounded rounded-3 text-dark fs-6 fw-bolder">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   				</p>
   			</div>
   		</div>
   	</div>
   	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,245.3C320,267,400,277,480,240C560,203,640,117,720,106.7C800,96,880,160,960,160C1040,160,1120,96,1200,101.3C1280,107,1360,181,1400,218.7L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
   </div>
   <!-- last about me -->

   <!-- contact -->
   <div class="contact bg-warning">
   	<div class="title-card text-center">
   		<h3>Contact</h3>
   		<hr style="height: 0.4em">
   	</div>
   	<div class="text-center">
   		<img src="img/your-logo.png" style="width: 12em" class="p-3">
  		<div class="card-body">
    		<h2>Patrik william</h2>
    		<p>@Patrik_williamm <a href="https://www.instagram.com/patrik_williamm/">follow</a></p>
    		<p>We're here to help.</p>
    		<span>makassar, indonesia | support patrik william</span>
  		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,64L60,90.7C120,117,240,171,360,202.7C480,235,600,245,720,218.7C840,192,960,128,1080,117.3C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
   </div>
   <!-- last contact -->

   <!-- footer -->
   <footer class="bg-secondary">
   		<h4 class="text-light text-center">create with love patrik william</h4>
   </footer>
   <!-- last footer -->

    <!-- Modal -->
    <div class="modal fade me-2" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content mt-5">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">hello world</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         	<table class="table table-striped">
  				<tr>
  					<th>ID</th>
  					<th>SEMESTER</th>
  					<th>IPK</th>
  					<th>KETERANGAN</th>
  				</tr>
          <!-- php code ipk -->
          <?php $i = 1; ?>
          <?php foreach($ipk as $nilai): ?>
  				<tr>
  					<td><?= $i; ?></td>
  					<td><?= $nilai['semester'] ?></td>
  					<td><?= $nilai['ipk'] ?></td>
  					<td><?= $nilai['keterangan'] ?></td>
  				</tr>
          <?php $i++; ?>
          <?php endforeach; ?>
          <!-- last code ipk -->
			</table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Edit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade me-2" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content mt-5">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">KEGIATAN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <ul class="list-group">
            <!-- PHP CODE kegiatan -->
            <?php foreach($Kegiatan as $kgt): ?>
  				  <li class="list-group-item d-flex justify-content-between align-items-center">
   		 			   <?= $kgt['nama_kegiatan'] ?>
    				  <span class="badge bg-primary rounded-pill"><?= $kgt['total_kegiatan'] ?></span>
  				  </li>
            <?php endforeach; ?>
            <!-- last code kegiatan -->
			   </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade me-2 mt-5" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tugas </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table">
                <thead>
                  <tr class="bg-primary">
                    <th scope="col">No</th>
                    <th scope="col">Nama Tugas</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Tanggal Kumpul</th>
                  </tr>
                </thead>
                <!-- php code -->
                <?php $no = 1; ?>
                <?php foreach($task as $tugas):?>
                <tbody>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $tugas['nama_tugas'] ?></td>
                    <td><?= $tugas['mataKuliah'] ?></td>
                    <td><?= $tugas['tgl_kumpul'] ?></td>
                  </tr>
                  <?php $no++; ?>
                <?php endforeach; ?>
                  <!-- last php code -->
                </tbody>
              </table>
        </div>
      </div>
    </div>
    <!-- last modal -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
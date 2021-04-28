

<?php 
	
	$conn = mysqli_connect("localhost", "root", "", "portofolio");
	function view($data) {
		global $conn;

		$result = mysqli_query($conn, $data);
		$data = [];

		while ($dt=mysqli_fetch_assoc($result)) {
			$data[] = $dt;
		}

		return $data;
	}

	function regs($data) {
		global $conn;
		$id = htmlspecialchars($data['id']);
		$nama = htmlspecialchars($data['nama']);
		$username = stripslashes($data['username']);
		$password = mysqli_real_escape_string($conn, $data['password']);
		$konfirmasi_password = mysqli_real_escape_string($conn, $data['konfirmasi_password']);
		$img = upload();

		//cek username
		$user = mysqli_query($conn, "SELECT username FROM pw_users WHERE username='$username' ");
		mysqli_fetch_row($user);

		if (mysqli_fetch_assoc($user) > 1) {
			echo "<script>
					alert('username telah digunakan')
			 	</script>";
			return false;
		}

		//cek password
		if ($password != $konfirmasi_password) {
			echo "<script>
					alert('password / konfirmasipass berbeda')
			 	</script>";
			return false;
		}

		if (strlen($password) < 8) {
			echo "<script>
					alert('password terlalu pendek');
			 	</script>";
			return false;
		}

		//img
		if (!$img) {
			return false;
		}

		//generate password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambahakan kedalam DB
		$result = mysqli_query($conn, "INSERT INTO pw_users VALUES( '$id', '$img', '$nama', '$username', '$password' )");
		return mysqli_affected_rows($conn);
	}
	
	function upload() {

		$nameImg = $_FILES['img']['name'];
		$size = $_FILES['img']['size'];
		$error = $_FILES['img']['error'];
		$tmp_name = $_FILES['img']['tmp_name'];

		if ($size > 1000000) {
			echo "<script>
					alert('ukuran file anda besar');
			 	</script>";
			return false;
		}

		if ($error == 4) {
			echo "<script>
					alert('error img');
			 	</script>";
			return false;
		}

		$typeImgValid = ['jpg', 'jpeg', 'png'];
		$typeImg = explode('.', $nameImg);
		$typeImg = strtolower(end($typeImg));

		if (!in_array($typeImg, $typeImgValid)) {
			echo "<script>
					alert('type file tidak ditemukan');
			 	</script>";
			return false;
		}

		//generate nama from img
		$newNameImg = uniqid();
		$newNameImg .= ".";
		$newNameImg .= $typeImg;

		move_uploaded_file($tmp_name, "img/$newNameImg");
		return $newNameImg;
	}

	

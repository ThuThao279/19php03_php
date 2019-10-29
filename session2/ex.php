
	<style type="text/css">
		.error {
			color: red;
		}
		.radio {
			margin-left: 50px;
		}
	</style>

<?php
	$username = $radio = $email = $date = '';
	$erruser = $errradio = $erremail = $date = '';
	$checkError = true;
	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$radio = $_POST['radio'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		// validate form
		if ($username == '') {
			$erruser = 'Please input username';
			$checkError = false;
		}
		if ($radio == '') {
			$errradio = 'Please input radio';
			$checkError = false;
		}
		if ($email == '') {
			$erremail = 'Please input email';
			$checkError = false;
		}
		if ($date == '') {
			$errdate = 'Please input date';
			$checkError = false;
		}
		if ($checkError = true) {
			
		}
	}
?>
	<h1>Calculator</h1>
<form action="#" method="POST" >
	<p>
		Ho va ten
		<input type="text" name="username" value="<?php echo $username?>" required= "" placeholder="name">
		<span class="error"></span>
	</p>
	<p>
		Gioi tinh
		<p class=" radio" ><input type="radio" name="radio" value="<?php echo $radio?>">
		<span class="error"></span>Nam</p>
		<p class="radio"><input type="radio" name="radio" value="<?php echo $radio?>">
		<span class="error"></span>Nu</p>
	</p>
	<p>
		Email
		<input type="text" name="Email" value="<?php echo $Email?>" required="">
		<span class="error"></span>
	</p>
	<p>
		Ngay sinh
		<input type="date" name="date" value="<?php echo $date?>" required="">
		<span class="error"></span>
	</p>
	<p>
        <input type="submit" name="register" value="register" required="">
    </p

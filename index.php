

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="login-modal">
		
		
		<form action="" method = "post">
			<p>Login:</p>
			<input type="text" name = "login" required/>
			<p>Password:</p>
			<input type="password" name="password" required/><br><br>
			<button type = "submit">Вход</button>
		</form>
	</div>

<?php
	
	require_once 'connect.php';
	session_start();
	if(isset($_POST['login']) && isset($_POST['password'])){
		$login = $_POST['login'];
		$password = $_POST['password'];

		$query = "SELECT * FROM `users` WHERE `login` = '$login' and `password` = '$password' ";
		$result = mysqli_query($connect, $query) or die (mysqli_error($connect));

		$count = mysqli_num_rows($result); 
		
		if ($count == 1){
			$nickname = mysqli_query($connect, "SELECT `nickname` FROM `users` WHERE`login` = '$login' and `password` = '$password' ");
			$nickname = mysqli_fetch_assoc($nickname);
			$_SESSION['login'] = $login;
			$_SESSION['nickname'] = $nickname['nickname'];
			header('Location: ./content.php');
			exit();
		}else{
			echo('Error');
		}
	}

?>
</body>
</html>
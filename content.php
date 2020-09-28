<?php
require_once 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Document</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<header>
		<p><?= $_SESSION['nickname'] ?></p>
	</header>
	<div class="update-user">
		<div class="update-user-modal">
			<button class = "hide-modal"  onclick = "hideModal();"/>✖</button>
			<form action="mod.php" method = "post" class = "update-user-modal__form"  >
				<input type="hidden" name = "id">
				<input type="text" name = "name" placeholder="Name" required/>
				<input type="text" name = "lastname" placeholder="Lastname" required/>
				<input type="number" name = "age" placeholder="Age" required/>
				<input type="text" name = "sex" placeholder="Sex" required/>
				<input type="text" name = "place" placeholder="Place" required/> 
				<input type="hidden" name = "action" value = "update">
				<button type = "submit" onclick = "hideModal();" />Update user</button>
			</form>
		</div>
	</div>
	<div class="background-mat"></div>
	
	<form action="mod.php" method = "post" class = "create-user__form">
		<input type="text" name = "name" placeholder="Name" required/>
		<input type="text" name = "lastname" placeholder="Lastname" required/>
		<input type="number" name = "age" placeholder="Age" required/>
		<input type="text" name = "sex" placeholder="Sex" required/>
		<input type="text" name = "place" placeholder="Place" required/>
		<input type="hidden"  name = "action" value = "create" >
		<button type = "submit"/>Add user</button>
	</form>
	<table>
		<tr />
			<th>Name</th>
			<th>Lastname</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Place</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php 
			$users = mysqli_query($connect,"SELECT * FROM `user_info`");
			$users = mysqli_fetch_all($users);
			foreach ($users as $user) {
				# 
		?>
				<tr>
					<input type="hidden" value = "<?= $user[0] ?>" >
					<td><?= $user[1] ?></td>
					<td><?= $user[2] ?></td>
					<td><?= $user[3] ?></td>
					<td><?= $user[4] ?></td>
					<td><?= $user[5] ?></td>
					<td onclick = "update_user(event)" >🔄</td>
					<td><a href="delete.php?id=<?= $user[0] ?>">✖</a></td>
				</tr>
		<?php
			};
		?>

	</table>

	<div class=""></div>
 <script type="text/javascript" src="./main.js" ></script>
</body>
</html>
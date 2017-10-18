<?php 
	if (isset($_POST['submit'])) {
		session_start();
		$_SESSION['name'] = $_POST['name']; // SESSON里name名字随便起
		$_SESSION['email'] = $_POST['email']; // SESSON里name名字随便起

		header("Location: page2.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page1</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" value="提交" name="submit">
	</form>
</body>
</html>





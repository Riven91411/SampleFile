<!doctype html>
<?php
if(isset($_POST['Submit'])){
	$un = $_POST['Username'];
	$pw = $_POST['Password'];
	if($un=="ADMIN" && $pw=="ADMIN123"){
		echo("Login Success!");
	}else{
		echo("Invalid Username/Password!");
	}
}
?>
<html>
<head>
<meta charset="utf-10">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>
	<body>
	<div class="container">
				<section class="login-box">
				<h2>Login</h2>
<form action="" method="post">
    <table align="center">
	    <tr>
		    <td>Username:</td>
			<td><input type="text" name ="Username" placeholder="Username"></td>
		</tr>
		<tr>
		    <td>Password:</td>
			<td><input type="text" name ="Password" placeholder="Password"></td>
		</tr>
		<tr>
		    <td></td>
			<td><input type="Submit" name="Submit" value="Submit"</td>
		</tr>
	</table>
</form>
</section>
</div>
</body>
</html>
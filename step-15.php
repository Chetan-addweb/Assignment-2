<?php session_start();

if (isset($_POST[''])){
	$password =$_POST['password'];
	$enc_password =md5('password');
$msg=mysqli_query($con,"insert into users(password) values('$enc_password')");
if($msg){

echo "<script>alert('Register succesfully');</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>password</title>
</head>
<body>
	<input type="password" name="password" required>
	<input type="submit" name="submit"  value="submit">

</body>
</html>
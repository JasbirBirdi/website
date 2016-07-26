<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$connect =mysql_connect($servername,$username,$password);
	$database = mysql_select_db("up_db",$connect);
	$email = $_POST['Email'];
	$pwd = $_POST['password'];
	$sql = "SELECT count(*) FROM sign_up WHERE (email='$email' AND password='$pwd')";
	$query = mysql_query($sql);
	$result = mysql_fetch_array($query);
	if($result[0]>0){
			echo "LOGIN SUCCESSFUL!";
		} else {
				echo "ERROR"; 
			}
?>
</body>
</html>
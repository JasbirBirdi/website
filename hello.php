<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<!--	$sql_2 = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
    
    -->
<?php
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$database = "up_db";
	$connect = new mysqli($server_name,$user_name,$password,$database);
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$branch = $_POST["branch"];
	$scholar = $_POST["Scholar_No"];
	$email = $_POST["Email"];
	$password = $_POST["password"];
	$contact = $_POST["Mobile_No"];
	
	
	
	$sql = "INSERT INTO sign_up(firstname,lastname,branch,scholar_id,email,password,contact)					VALUES('$fname','$lname','$branch','$scholar','$email','$password','$contact')";	
	if ($connect->query($sql) === TRUE) {
    include_once "signup_confirm.html";
	} 
	else {
    echo "Account Creation Failed" . $sql . "<br>" . $connect->error;
}

?>

</body>
</html>
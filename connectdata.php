<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}


// $username = filter_input(INPUT_POST, 'username');
// $password = filter_input(INPUT_POST, 'password');
// // if (!empty($username)) {
	
// // if (!empty($password)) {
// 		//Params to connect to database
// $dbHost = "localhost";
// $dbUser = "root";
// $dbPass = "";
// $dbName = "mydata";	# code...

// 	//database connection
//  $conn =  mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
//  if ($conn->connect_error) {
//  	die('Connection Faild :'.$conn->connect_error);
//  }else{
//  	$stmt = $conn->prepare("insert into registration(username,password)
//  		values(?, ?");
//  	$stmt->bind_param("ss",$username, $password);
//  	$stmt->execute();
//  	echo "registration successfully...";
//  	$stmt->close();
//  	$conn->close();
//  }
// // if (mysql_connect_error()) {
// 	# code...
// // 	die('Connect Error('.mysql_connect_error() .') '
// // 		. mysqli_connect_error());
// // }else{
// // 	$sql = "INSERT INTO belka(username , password)
// // 	values('$username' , '$password') ";
// // 	if ($conn->query($sql)) {
// // 		# code...
// // 		echo "New record is inserted sucessfully";
// // 	}else{
// // 		echo "Error";
// // 	}
// // }
// // if($conn){
     
// // }else{
// //      die("database connection failed!");
// // }

// // }else{
// // 	echo "Password should not be empty";
// // 	die();
// // }
// // }
// 
?>
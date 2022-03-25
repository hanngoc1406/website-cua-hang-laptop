<?php  
	//ket noi csdl MySQL thong qua MySQLi
	$localhost = 'db';
	$username = "ducpa";
	$password = "1";
	$database = "MY_DATABASE";

	//doi tuong de ket noi
	$mysqli = new mysqli($localhost, $username, $password, $database);

	//thiet lap form chu tieng viet
	$mysqli -> set_charset("utf8");

	//Thiet lap thong bao loi neu co
	if(mysqli_connect_errno()){
		echo "Khong the ket noi CSDL<br />".mysqli_connect_error();
	exit();
	}
?>

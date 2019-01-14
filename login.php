<?php
session_start();
include( "includes/dbconfig.php" );

 #thuc thi login action tu form.php
if ( isset( $_POST[ 'login-submit' ] ) ) {
	#print_r($_POST);die;
	$userNameEmailPhone = $_POST[ 'userNameEmailPhone' ];
	$password = md5($_POST[ 'password' ]);
	# ma hoa mat khau login 
	# pharse A : $pwd = md5 (usrname . password)
	# pharse B : $pwd = md5 ( username . md5(password))

	# lay thong tin username và password trong db username = admin
	# $sqlUser = SELECT username,password,id FORM User WHERE 
	$sql = "SELECT * FROM users WHERE (username='$userNameEmailPhone' OR email='$userNameEmailPhone' OR phone='$userNameEmailPhone') AND password='$password'";
	echo $sql;
	$query = mysqli_query( $conn, $sql );
	
	if ( mysqli_num_rows($query) > 0 ) {
		$detail=mysqli_fetch_array($query);
		$extra = "homepage.php";
		$_SESSION[ 'id' ] = $detail[ 'user_id' ];
		$_SESSION[ 'username' ] = $detail[ 'username' ];
		$host = $_SERVER[ 'HTTP_HOST' ];
		$uri = rtrim( dirname( $_SERVER[ 'PHP_SELF' ] ), '/\\' );
		header( "location:http://$host$uri/$extra" );
		exit();
	} else {
		echo '<script type="text/javascript"> alert("Invalid credential!"); // window.location.href = "loginform.php";</script>';
	}
}
?>
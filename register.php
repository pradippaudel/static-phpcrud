<?php /** 
 * @Author: Sandesh Bhattarai
 * @Date:   2017-08-29 17:27:55
 * @Organization: Knockout System Pvt. Ltd.
 */

require 'db_connect.php';

session_start();
function debugger($data, $is_die=false){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	if($is_die){
		exit;
	}
}

if(isset($_POST) && !empty($_POST)){
	$full_name = $_POST['full_name'];
	$username = $_POST['username'];
	$date_of_birth = $_POST['date_of_birth'];
	$address = $_POST['address'];
	$email_address = $_POST['email_address'];
	$phone_number = $_POST['phone_number'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$about_yourself = $_POST['about_yourself'];
	$role_id = $_POST['role_id'];

	// "INSERT INTO users SET full_name = '".$full_name."', username = '".$username."' role_id = ".$role_id
	$sql = "INSERT INTO users SET 
			full_name = '".$full_name."',
			username = '".$username."',
			date_of_birth = '".$date_of_birth."',
			address = '".$address."',
			email = '".$email_address."',
			phone_number = '".$phone_number."',
			gender = '".$gender."',
			country = '".$country."',
			about = '".$about_yourself."',
			role_id = ".$role_id;
	$query = mysqli_query($conn, $sql);
	if($query){
		echo "User added successfully";
	} else {
		echo "There was problem while adding data";
	}
	header('location: user-register.php');
	exit;
} else {
	header('location: user-register.php');
	exit;
}

debugger($_POST, true);
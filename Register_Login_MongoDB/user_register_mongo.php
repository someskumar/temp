<?php
session_start();
?>
<?php
//-------------------mongo connection---------------------//

require 'vendor/autoload.php';
$con = new MongoDB\Client;
$db = $con->mydb1;
$collection = $db->user_details;

//-----------------mongo_query-------------------------//
if($_POST['email']!=''){
try{
	$insertUser = $collection->insertOne(
[
'email'=>$_POST['email'],
'name1'=>$_POST['fname'],
'name2'=>$_POST['lname'],
'password'=>md5($_POST['password']),
'city'=>$_POST['city']
]
);
		$_SESSION["checkuser"] = "goto_userIndex";
		$_SESSION["usermail"] = $_POST['email'];
		$_SESSION["username"] = $_POST['fname']." ".$_POST['lname'];
		$_SESSION["usertype"]=$_POST["user_type"];
		header( 'Location: user_index.php' );
	}
	catch(Exception $e){
		echo $e;
		/*$_SESSION["checkuser"] = "already_exist";
		$_SESSION["usermail"]=$email;
		header( 'Location:register.php' );*/
	}
}
else{
	echo"<script>alert('Email_Id not valid..')</script>";
	header( 'Location: register.php' );
}
?>

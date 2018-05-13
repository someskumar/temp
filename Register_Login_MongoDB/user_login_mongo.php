<?php
session_start();?>
<?php
//-------------------mongo connection---------------------//

require 'vendor/autoload.php';
$con = new MongoDB\Client;
$db = $con->mydb1;
$collection = $db->user_details;
echo "db connected";
//-----------------mongo_query-------------------------//

if($collection->findOne(array('email'=> $_POST['email']))){
	$row=$collection->findOne(array('email'=> $_POST['email'], 'password'=> md5($_POST['password'])));
if($row){
			$_SESSION["checkuser"]="yes_exsist";
			$_SESSION["username"]=$row["name1"]." ".$row["name2"];
			$_SESSION["usermail"]=$row["email"];
			$_SESSION["usertype"]=$row["mode"];
			$_SESSION["city"]=$row["city"];
			header('Location: user_index.php');
}
else{
			$_SESSION["checkuser"]="user_pass_fail";
			header('Location: login.php');
}
}
else{
	echo "No user";
		$_SESSION["checkuser"]="not_exsist";
			header('Location: login.php');
}
?>
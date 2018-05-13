<?php
session_start();
?>
<?php
session_unset();
$_SESSION["checkuser"]="logged_out";    
echo "Logged out sucessfully";
header('Location: index11.php');
?>
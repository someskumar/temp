<?php
if($_SESSION["checkuser"]=="yes_exsist" || $_SESSION["checkuser"] == "goto_userIndex"){
$_SESSION["checkuser"]="login_sucess"; }

else{
    header('Location : index11.php');
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>User Login</title>
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<bodyonLoad="dump()">
    <div class="loginbox">
        <div class="glass">
            <img src="user.png" class="user">
            <h3>Sign In</h3>
            <form name="userlogin" action="user_login_mongo.php" method="post">
                <div class="inputbox">
                    <input type="email" name="email" value="<?php echo $_SESSION["email"]; ?>">
                    <span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="inputbox">
                    <input type="text" name="name" value="<?php echo $_SESSION["username"]; ?>">
                    <span>
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="button" value="logout" onClick="proceed()"/>
            </form>
        </div>
    </div>
    <script>
    function openpage(){
        window.open("logout.php","_self");
    }
    </script>
    </body>
    </html>
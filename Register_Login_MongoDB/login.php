<?php
session_start();?>
<!doctype html>
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
                    <input type="email" name="email" placeholder="usermail">
                    <span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" placeholder="password">
                    <span>
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="button" value="Login" onClick="proceed()"/>
                <input type="button" value="Register" onClick="openpage()"/>
            </form>
        </div>
    </div>
    <script>
    function openpage(){
        window.open("register.php","_self");
    }
function dump(){
	var x ="<?php echo $_SESSION["checkuser"]; ?>";
		if(x=="not_exsist"){
			alert("User not exists\n  Redirecting to Register area..");
			window.open("register.php","_self");
		}
		if(x=="user_pass_fail"){
			alert("Password Mismatch");
			document.userlogin.password.focus();
		}
		if(x=="yes_exsist"){
			alert("Login Sucessfull.. Proceed your actions");
			window.open("user_index.php","_self");
		}
		if(x=="login_sucess"){
			window.open("user_index.php","_self");
		}
}
function proceed(){
	if(validate()){
		alert("Loging you in...");
			document.userlogin.submit();
	}
}
function validate(){
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(document.userlogin.email.value=="" || (!filter.test(document.userlogin.email.value))){
		alert("Check Email Details. "+document.userlogin.email.value+" is not valid.");
		document.userlogin.email.focus();
		return false;
	}
	if(document.userlogin.password.value=="" ){
		alert("Password can't be empty.");
		document.userlogin.password.focus();
		return false;
	}
	return true;
	
}

</script>
</body>
</html>
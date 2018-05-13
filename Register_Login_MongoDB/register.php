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

<body>
    <div class="loginbox">
        <div class="glass">
            <img src="user.png" class="user">
            <h3>Sign In</h3>
            <form name="userreg" action="user_register_mongo.php" method="post">
                <div class="inputbox">
                    <input type="email" name="email" placeholder="usermail">
                    <span>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="inputbox">
                    <input type="text" name="fname" placeholder="First Name">
                    <span>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="inputbox">
                    <input type="text" name="lname" placeholder="Second Name">
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
                <div class="inputbox">
                    <input type="password" name="password1" placeholder="Re-type password">
                    <span>
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </span>
				</div>
				<div class="inputbox">
				<span>
									<i class="fa fa-address-book" aria-hidden="true"></i>
                    </span>
				<select name="city" placeholder="select your city" >
										<option value="none">-Select-</option>
										<option value="coimbatore">Coimbatore,TN</option>
										<option value="bangalore">Bangalore,KA</option>
									</select>
									
                </div>
				<div class="inputbox">
                <input type="hidden" name="terms" value="marked"/>
                </div><br>
                <input type="button" value="Register" onClick="proceed()">
				<input type="button" value="Login" onClick="openpage()">
            </form>
        </div>
    </div>

    <script>
	function openpage(){
        window.open("login.php","_self");
    }
function login(){
	window.open("login.php","_self");
}
function dump(){
	var x ="<?php echo $_SESSION["checkuser"]; ?>"; 
		if(x=="already_exist"){
			alert("User already exists\n  Redirecting to login area..");
			window.open("login.php","_self");
		}
		if(x=="login_sucess"){
			window.open("user_index.php","_self");
		}

}
function proceed(){
	if(validate()){

		if(confirm("UserId : "+document.userreg.email.value+"\nName : "+document.userreg.fname.value+" "+document.userreg.lname.value+"\nCity : "+document.userreg.city.value)){
			var x=0;
			var y=1;
			while(x!=y){
				x = Math.floor((Math.random()*1087090)+158+4589);
			    y=prompt("Enter this number \n"+x);

			}
			alert("Registration is in progress...");
			document.userreg.fname.value.toUpperCase();
			document.userreg.lname.value.toUpperCase();
			document.userreg.submit();
		}
	}
}
function validate(){
	/*var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(document.userreg.email.value=="" || (!filter.test(document.userreg.email.value))){
		alert("Check Email Details. "+document.userreg.email.value+" is not valid.");
		document.userreg.email.focus();
		return false;
	}
	if (document.userreg.fname.value=="" || (!(/^[A-Za-z\s]+$/.test(document.userreg.fname.value)))){
		alert("Check your First name. "+document.userreg.fname.value+" has invalid characters.");
		document.userreg.fname.focus();
		return false;
	}
	if (document.userreg.lname.value=="" || (!(/^[A-Za-z\s]+$/.test(document.userreg.lname.value)))){
		alert("Check your Last name. "+document.userreg.lname.value+" has invalid characters.");
		document.userreg.lname.focus();
		return false;
	}/*
	if((document.userreg.password.value=="" )|| (document.userreg.password1.value=="")){
		alert("Password can't be empty.");
		document.userreg.password.focus();
		//document.userreg.password1.focus();
		return false;
	}
	if(document.userreg.password.value!=""){
    var newPassword = document.userreg.password.value;
    var minNumberofChars = 8;
    var regularExpression  = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    //alert(newPassword);
    if(newPassword.length < minNumberofChars){
		alert("password should contain atleast 8 characters");
		document.userreg.password.focus();
        return false;
    }
    if(!regularExpression.test(newPassword)) {
        alert("password should contain atleast one number and one special character");
		document.userreg.password.focus();
        return false;
	}
	}
	if(document.userreg.password.value!=document.userreg.password1.value){
		alert("password should be same on both.. password mismatch...");
		document.userreg.password1.focus();
		return false;
	}
	if((document.userreg.city.value=="none" )){
		alert("Select your city.");
		document.userreg.city.focus();
		return false;
	}
	if(!(document.userreg.terms.checked)){
		if(confirm("Accept our Terms and Conditions.")){
			document.userreg.terms.value="Marked";
			return true;
		}
		else{
		document.userreg.terms.focus();
		return false;
		}
	}*/
	return true;
}

</script>
</body>

</html>
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
            <img src="icon.png" class="user">
            <h3>Index</h3>
            <form name="index" action="" method="post">
                <input type="button" value="Register" onClick="proceed()">
				<input type="button" value="Login" onClick="proceed1()">
            </form>
        </div>
    </div>
	<script>
	function proceed(){
        window.open("login.php","_self");
    }
	function proceed1(){
        window.open("register.php","_self");
    }
	</script>
	</body>
	</html>
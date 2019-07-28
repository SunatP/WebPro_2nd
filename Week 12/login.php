<?php session_start();

//setting username and password

	ob_start();
	$username = array("admin","user","sale","pok");
	$password = array("123","456","789","000");

//adding your code here



function checkLogin($user , $pass){
	global $username,$password;
	for($i = 0 ; $i < count($username);$i++){
		if($user == $username[$i] && $pass == $password[$i]){
			return true;
		}
	}
	return false;
}

?>

<!DOCTYPE html>
 <html>
    <head>
        <title>Login and Registration Form</title>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            
        <?php
            //adding your code here
            if(isset($_POST["username"]) && isset($_POST['password'])){
                if(checkLogin($_POST["username"],$_POST['password'])){
                    $_SESSION['errormsg'] = "";
                    $_SESSION['login'] = "welcome";
                    header( "location:welcome.php" );
                }else{
                    $_SESSION['errormsg'] = "Wrong username or password";
                    echo"<p>Wrong Username or Password</p>
                        <p>Please go back to re enter them again</p>
                        <a href=\"index.php\">back to login</a>
                        <p>or wait for <span id=\"counter\">5</span> Sec</p>
                        
                    ";
                    header("refresh:5 ;url=index.php");
                    
                }
            }
        ?>
	</div>
    </body>
    <script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

</html>

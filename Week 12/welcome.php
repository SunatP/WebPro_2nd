<?php session_start();?>
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
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset ($_SESSION['login']);
        }else{
                echo "<h1>Please back to login</h1>
                      <a href=\"index.php\">Back to Login</a>";
              }
        ?>
            
	</div>
    </body>
</html>

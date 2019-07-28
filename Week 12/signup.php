<!DOCTYPE html>
 <html>
    <head>
        <title>Login and Registration Form</title>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
    



        <div class="container">
            
        <?php
             if(isset($_POST['usernamesignup']) && isset($_POST['emailsignup']) && isset($_POST['passwordsignup']) && isset($_POST['passwordsignup_confirm'])){
               
                echo $_SESSION['login'];
                unset ($_SESSION['login']);
            
                    echo "<h1 style=\"font-size: 50px;\">THANK YOU FOR REGISTRATION</h1>";
                    echo "<h1 style=\"font-size: 50px;\">YOUR USERNAME IS <span style=\"color: rgba(26,89,120,0.9)\">".$_POST['usernamesignup']."<span></h1>";
                    echo "<h1 style=\"font-size: 50px;\">YOUR EMAIL ADDRESS IS <span style=\"color: rgba(26,89,120,0.9)\">".$_POST['emailsignup']."<span></h1>";
               }else{
                echo "<h1 style=\"color: red;\">Please login first</h1>";
               
       
                
              }
        ?>
    </div>
    </body>
</html>

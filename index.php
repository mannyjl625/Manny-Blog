<!DOCTYPE html>

<html>
    <head>
        <title>Manny's Blog</title>
    </head>
    <body>
            <?php
            session_start();  // creates session array(kinda like POST) that can save  variables between pages
            if(isset($_SESSION['username'])){
                echo  " Hello " . $_SESSION['username']; // use "." 
            ?>
                <form name = "logout" action= "login.php" method = "post">
                <input type = "submit" name = "logoutButton" value = "logout"/>

            <?php
            
            }
            
            else{
                if(isset($_SESSION['loginFail'])){
                    echo $_SESSION['loginFail'] . "</br>";
                    echo "login fail";
                    unset($_SESSION['loginFail']);
                }
            ?>  
                <form name = "login" action= "login.php" method = "post">
                Username: <input type = "text" name = "username"/></br>
                Password: <input type = "password" name = "password"/></br>
                <input type = "submit" value = "Login" />
                </form>
                <a href = "register.php"><strong>Register</strong></a></br>

            <?php
            }
        ?> 
     </body>
</html>

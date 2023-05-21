<!doctype html>
<html>
    
<head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | login</title>
        <link rel="stylesheet" href="styles.css">
</head>

<body>
     <div class="LoginFrm">
        <div class="FormBx">
            <div id="FormBx">
            
            <form class="FrmLogIn" action="Login.php" method="post" >
             <h2>Login</h2>
                  <?php if(isset($_GET['error'])){?>
                    <p class="erRor"> <?php echo$_GET['error']; ?> </p>
                    
                  <?php }?>
                <div id="textbx" class="input-box-user">
                    <input class="resizedtextbox" type="text" name="User" placeholder="Username" >
                </div>

                <div id="textbx" class="input-box-pass">
                    <input class="resizedtextbox" type="password" name="Pass" placeholder="Password">
                </div>

                <div class="Remember">
                    <label>
                        <input type="checkbox">Remember me
                    </label><br>   
                </div>

                <div class="btn"><button class="Login-Btn" type="submit" name="SubmitBtn">LogIn</button> </div>

               <div class="forgot"> <a href="#">Forgot Username/Password?</a> </div> 

               <div class="Register">
                <p>Don't have an account? <a href="sign_up.php" class="register-link">Click here!</a></p>
               </div>

            </form>
        </div>
        </div>
     </div>
</body>
</html>
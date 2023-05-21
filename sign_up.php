<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Sign Up</title>
        <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="SignupFrm">
        <div class="FormBx">
            <div id="FormBx">
                <form action="signup.php" class="FrmSignUp" method="post">
                 <h2>Sign Up</h2>
                <div id="textbx" class="SignUser">
                    <input class="resizedtextbox" type="text" name="UserSign" placeholder="Username">
                </div>

                <div id="textbx" class="SignPass">
                    <input class="resizedtextbox" type="Password" name="PassSign" placeholder="Password">
                </div>

                <div id="textbx" class="SignName">
                    <input class="resizedtextbox" type="text" name="NameSign" placeholder="Name">
                </div> 
                
                <div id="textbx" class="SignDept">
                    <input class="resizedtextbox" type="text" name="DeptSign" placeholder="Department">
                </div>

                <div class="btn">
                    <button class="Login-Btn" type="submit" name="SubmitBtn">Sign Up</button> 
                </div>

                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
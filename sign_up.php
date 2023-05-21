<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Sign Up</title>
        <link rel="stylesheet" href="styles_signup.css">
</head>

<body>
    <div class="SignupFrm">
        <div class="FormBx">
            <div id="FormBx">
                <form action="signup.php" class="FrmSignUp" method="post">
                    <h2>Sign Up</h2>
                    
                    <?php 
                  
                  if(isset($_GET['error'])){
                    ?>
                    
                    <p class="erRor"> 
                        <?php 
                        echo$_GET['error']; 
                        ?> 
                    </p>
                    
                  <?php 
                }
                
                ?>
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
                         
                          <select name="DeptSign" class="resizedtextbox" id="drop">
                            <option value=""disabled selected hidden>Department</option>
                            <option value="Factory">Factory</option>
                            <option value="Warehouse">Warehouse</option>
                            <option value="Compounding">Compounding</option>
                          </select>
                     </div>

                    <div class="btn">
                        <button class="Login-Btn" type="submit" name="SubmitBtn">Sign Up</button> 
                    </div>

                    <div class="arrow">
                    <i class="fa-solid fa-arrow-left" id="arrow"><a href="index.php" class="Back"> Back</a></i>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://kit.fontawesome.com/5c09730e7a.js" crossorigin="anonymous"></script>
</body>
</html>
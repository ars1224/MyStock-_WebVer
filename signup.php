<?php

include "conn_db.php";

if(isset($_POST['SubmitBtn'])){
$User = $_POST['UserSign'];
$Pass = $_POST['PassSign'];
$Name = $_POST['NameSign'];
$Dept = $_POST['DeptSign'];
 
    if(empty($User)){
        header("Location: sign_up.php?error=Input a valid Usernname!");
        exit();
    }
    
    else if(empty($Pass)){
        header("Location: sign_up.php?error=Input a valid Pass!");
        exit();
    }
    
    else if(empty($Name)){
        header("Location: sign_up.php?error=Input a valid Name!");
        exit();
    }
    
    else if(empty($Dept)){
        header("Location: sign_up.php?error=Input a valid Department!");
        exit();
    }
    
    else{
        $sql = "INSERT INTO `login_db`(`userName`, `passWord`, `Name`, `Department`) VALUES ('$User','$Pass','$Name','$Dept')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: home.php");
            exit();
        }else{
            header("Location: sign_up.php?error=Input a valid Credentials!");
        exit();
        }
         }
}
else{
    header("Location: sign_up.php");
    exit();
}
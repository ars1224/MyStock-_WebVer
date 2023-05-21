<?php
include "conn_db.php";

if (isset($_POST['User']) && isset($_POST['Pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $User = validate($_POST['User']);
    $Pass = validate($_POST['Pass']);

    if (empty($User)){

        header("Location: index.php?error=Username is required");
        exit();
    }
    
    else if(empty($Pass)){

        header("Location: index.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM login_db WHERE userName = '$User' AND passWord = '$Pass'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
           echo"hello world!";
        }else{
            header("Location: index.php?error=Input a valid credentials!");
        exit();
        }
    }
}

else{
    header("Location: index.php");
    exit();
}
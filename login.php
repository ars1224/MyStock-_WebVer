<?php

if (isset($_POST['User']) && isset($_POST['User'])){
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
    }else if(empty($Pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    else{
        echo "valid input";
    }
}else{
    header("Location: index.php?error");
    exit();
}
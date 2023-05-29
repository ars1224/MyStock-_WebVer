<?php

include "conn_Stock_db.php";

if(isset($_POST['AddPlt'])){
    $Row = $_POST['row'];
    $Plt = $_POST['pltno'];
    $code = $_POST['pCode'];
    $batch = $_POST['batch'];
    $Exp = $_POST['exp'];
    $NoCtn = $_POST['NoCtns'];
    $Units = $_POST['units'];
    $PrtBox = $_POST['prtBx'];
    $total = $_POST['total'];

    if(empty($Row)){
        header("Location: Stock-page.php?error=Input a Row Name!");
        exit();
    }

    else if(empty($Plt)){
        header("Location: Stock-page.php?error=Input a Pallet No.!");
        exit();
    }

    else if(empty($code)){
        header("Location: Stock-page.php?error=Inser a PRODUCT CODE!");
        exit();
    }

    else if(empty($batch)){
        header("Location: Stock-page.php?error=Batch No??!!!");
        exit();
    }

    else if(empty($Exp)){
        header("Location: Stock-page.php?error=Need to put an Expiration Date!");
        exit();
    }

    else if(empty($NoCtn)){
        header("Location: Stock-page.php?error=How Many Cartons?!");
        exit();
    }

    else if(empty($Units)){
        header("Location: Stock-page.php?error=How Many units per Carton?!");
        exit();
    }
    
    else{
        $sql = "INSERT INTO `wh1`(`ROW`, `Plt_No`, `Product_code`, `Batch_No`, `Expiry`, `No_Ctns`, `Units`, `Part_box`, `Total_Qty`) 
        VALUES ('[$Row','[$Plt','$code','$batch','$Exp','$NoCtn','$Units','$PrtBox','$total')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: Stock-page.php");
            exit();
        }
        
        else{
            header("Location: Stock-page.php?error=Input a valid Credentials!");
            exit();
        }
    }
}

else{
    header("Location: Stock-page.php");
    exit();
}

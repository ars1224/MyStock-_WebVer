<?php

include "conn_Stock_db.php";

if(isset($_POST['SubmitBtn'])){
    $Row = $_POST['rowBar'];
    $Plt = $_POST['pltNoBar'];
    $code = $_POST['pcodeBar'];
    $batch = $_POST['batchNoBar'];
    $Exp = $_POST['ExpBar'];
    $NoCtn = $_POST['noCtnBar'];
    $Units = $_POST['unitsBar'];
    $PrtBox = $_POST['prtBxBar'];
    $total = $_POST['TotalBar'];

    $uppercaseText1 = strtoupper($Row);
    $uppercaseText2 = strtoupper($code);
    $uppercaseText3 = strtoupper($batch);

    if(empty($Row)){
        header("Location: Stock-Page_Add a Pallet.php?error=Input a valid ROW!");
        exit();
    }
    
    else if(empty($Plt)){
        header("Location: Stock-Page_Add a Pallet.php?error=Input a valid PALLET NUMBER!");
        exit();
    }
    
    else if(empty($code)){
        header("Location: Stock-Page_Add a Pallet.php?error=Input a valid PRODUCT CODE!");
        exit();
    }
    
    else if(empty($Exp)){
        header("Location: Stock-Page_Add a Pallet.php?error=Input a valid EXPIRY DATE!");
        exit();
    }

    else if(empty($NoCtn)){
        header("Location: Stock-Page_Add a Pallet.php?error= SPECIFY HOW MANY CARTONS PER PALLET!");
        exit();
    }
    
    else if(empty($Units)){
        header("Location: Stock-Page_Add a Pallet.php?error=SPECIFY HOW MANY UNITS PER BOX!");
        exit();
    }

    else if(empty($total)){
        header("Location: Stock-Page_Add a Pallet.php?error=Input a valid Department!");
        exit();
    }
    else{
        $sql= "INSERT INTO `wh1`(`ROW`, `Plt_No`, `Product_code`, `Batch_No`, `Expiry`, `No_Ctns`, `Units`, `Part_box`, `Total_Qty`) VALUES ('$uppercaseText1','$Plt','$uppercaseText2','$uppercaseText3','$Exp','$NoCtn','$Units','$PrtBox','$total')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: Stock-Page_Add a Pallet.php");
            exit();
        }else{
            header("Location: Stock-Page_Add a Pallet.php?error=Input a valid Credentials!");
        exit();
        }
         }
}
else{
    header("Location: Stock-Page_Add a Pallet.php.php");
    exit();
}



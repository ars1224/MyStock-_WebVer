<?php
include "conn_Stock_db.php" ; 

foreach($_POST['selectRow'] as $dataId){
    $sql = "DELETE FROM wh1 WHERE Plt_No = $dataId";
    $query = mysqli_query($conn, $sql);
}
if ($query){
    header('location:Stock-pages.php');
}
else{
    echo "error";
}

?>
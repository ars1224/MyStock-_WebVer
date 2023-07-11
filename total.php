<?php

include "conn_Stock_db.php";

if(isset($_POST['selectRow'])){
    $selectRow = $_POST['selectRow'];
    $units = $_POST['Qty'];
    $ctns = $_POST['NoCtns'];
    $ShowCtn = $_POST['CtnTotal'];
    $ShowTotal = $_POST['UnitsTotal'];

}
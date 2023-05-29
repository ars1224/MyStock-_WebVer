<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Stock</title>
        <link rel="stylesheet" href="styles_Stock.css">
</head>

<body>
    <div class="add-pallet"> 
        <div class="popUp1" id="PopUp_1">
            <div class="popHead" >
                <p class="pHead">Add A Pallet</p>
                <p class="pBody">Fill the Pallet Information Bellow.</p>
            </div>
            <?php 
              
              if(isset($_GET['error'])){
                ?>
                
                <p class="erRor"> 
                    <?php 
                    echo $_GET['error']; 
                    ?> 
                </p>
                
              <?php 
            }
            
            ?>

            <div class="resizedtextbox1">
                <input id="inputs" class="rowBar" type="text" name="row" placeholder="Row" >
                <input id="inputs"  class="pltNoBar" type="integer" name="pltno" placeholder="Plt No." >
                <input id="inputs"  class="pcodeBar" type="text" name="pCode" placeholder="Prod. Code" >
                <input id="inputs"  class="batchNoBar" type="text" name="batch" placeholder="Batch No." >
                <input id="inputs"  class="ExpBar" type="text" name="exp" placeholder="Expiry" >
                <input id="inputs"  class="noCtnBar" type="text" name="NoCtns" placeholder="No. of Ctns" >
                <input id="inputs"  class="unitsBar" type="text" name="units" placeholder="Units/Ctn" >
                <input id="inputs"  class="prtBxBar" type="text" name="prtBx" placeholder="Part Box Qty" >
                <input id="inputs"  class="TotalBar" type="text" name="total" placeholder="Total Units" >
            </div>
                            
            <div class="addbtn1">
                <div class="pop1AddPlt">
                    <button id="myButton" class="addBtn" type="submit" name="AddBtnPlt">ADD</button>
                </div>
                
                <div class="pop1AddMorePlt">
                    <button class="addBtn" type="submit" name="AddBtnMore">ADD MORE</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
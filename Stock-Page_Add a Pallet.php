<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Stock_Add a Pallet</title>
        <link rel="stylesheet" href="styles_Stock-AddPallet.css">
    </head>

    <body>
        <nav class="head">
        
            <h2 class="tag"><a href="home.php" class="tag">My Stock!</a></h2>
            <div class="navi">
                <div class="list">
                    <ul class="home"><a href="home.php" class="home">HOME</a></ul>
                    <ul class="stock"><a href="Stock-page.php"class="Stock">STOCK</a></ul>
                    <ul class="received"><a href="home.php" class="recI">RECEIVED ITEMS</a></ul>
                    <ul class="log"><a href="home.php" class="lg">LOG</a></ul>
                </div>   
    
                <div class="user">
                    <i class="fa-regular fa-user"></i>
                </div>
        </nav>

            <div class="add-pallet"> 
                <div class="popUp1" id="PopUp_1">
                <form action="stock.php" class="AddFrm" method="post">
                    <div class="popHead" >
                        <p class="pHead">Add A Pallet!</p>
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
                        <input id="inputs"  name="rowBar" type="text"  placeholder="Row" >
                        <input id="inputs"  name="pltNoBar" type="number"  placeholder="Plt No." >
                        <input id="inputs"  name="pcodeBar" type="text"  placeholder="Prod. Code" >
                        <input id="inputs"  name="batchNoBar" type="text"  placeholder="Batch No." >
                        <input id="dateInput" class="date"  name="ExpBar" type="date"  placeholder="Expiry" value="YYYY-MM-DD">
                        <input id="inputs"  name="noCtnBar" type="number"  placeholder="No. of Ctns" >
                        <input id="inputs"  name="unitsBar" type="number"  placeholder="Units/Ctn" >
                        <input id="inputs"  name="prtBxBar" type="number"  placeholder="Part Box Qty" >
                        <input id="inputs"  name="TotalBar" type="number"  placeholder="Total Units" >
                    </div>
                                    
                    <div class="addbtn1">
                        <div class="pop1AddPlt">
                            <button class="addBtn" type="submit" name="SubmitBtn">ADD</button>
                        </div>
                        
                        <div class="pop1AddMorePlt">
                            <button class="addBtn" type="submit" name="AddBtnMore">ADD MORE</button>
                        </div>
                    </div>
                </div>
            </div>
    </body>
    <script src="StockScript.js"></script>
<script src="https://kit.fontawesome.com/5c09730e7a.js" crossorigin="anonymous"></script>
</html>
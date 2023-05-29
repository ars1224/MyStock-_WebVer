<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Stock</title>
        <link rel="stylesheet" href="styles_Stock.css">
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
    <div id="blur">
    <div class="whName">
        <div class="name">Warehouse:</div>

        <div class="Wh">
            <button class="choose">Choose a Warehouse</button>
        </div>

        <div class="arrows">
            <div class="up">
                <i class="fa-solid fa-caret-up"></i>
            </div>

            <div class="down">
                <i class="fa-solid fa-caret-down"></i>
            </div>

        </div>
    </div>
    
    <div class="content">
        <div class="search-bar">
            <div class="search">
                <input class="searchBar" type="text" name="search" placeholder="Looking for..." >
            </div>
            
            <div class="drop">
                <select name="Prod" class="resizedtextbox" id="drop">
                    <option value="Loc">Location</option>
                    <option value="code">Product Code</option>
                    <option value="des">Product Description</option>
                    <option value="batchNo">Batch Number</option>
                    <option value="exp">Expiration</option>
                </select>
            </div>
            
            <div class="search-Btn">
                <button class="searchBtn" type="submit" name="searchBtn">Search</button>
            </div>  
        </div>
        
        <div class="add-Item">
            <button id="addItems"class="addBtn" type="button" name="AddBtn" onclick="toggle()">ADD ITEM</button>
        </div>
        
        
        <div class="inventory">
            <div class="table-wraper">
                <table class="StockSheet">
                    <thead>
                        <tr class="headRow">
                            <th class="headr0">Row         </th>
                            <th class="headr1">Pallet No.  </th>
                            <th class="headr2">Product Code</th>
                            <th class="headr3">Batch    No.</th>
                            <th class="headr4">Expiry date </th> 
                            <th class="headr5">Ctns/Plt    </th>
                            <th class="headr6">Units/Ctn   </th>
                            <th class="headr7">Part Box Qty</th>
                            <th class="headr8">Total Qty   </th>
                            <th class="headr9">Action      </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php

                        include "conn_Stock_db.php";

                        $sql = "SELECT * FROM wh1";
                        $result = $conn->query($sql); 
                        
                        while($row = $result->fetch_assoc()){
                            echo  
                            "<tr class='datA'>
                                <td  name='Row'>". $row["ROW"] ."</td>
                                <td name=PltNo> ". $row["Plt_No"] ."</td>
                                <td name='Code'>". $row["Product_code"] ."</td>
                                <td name='Batch'>". $row["Batch_No"] ."</td>
                                <td name='Exp'>". $row["Expiry"] ."</td>
                                <td name='NoCtns'>". $row["No_Ctns"] ."</td>
                                <td name='Units'>". $row["Units"] ."</td>
                                <td name='PrtBx'>". $row["Part_box"] ."</td>
                                <td name='Qty'>". $row["Total_Qty"] ."</td>
                                <td class='action'>
                                    <div class='ups'>
                                        <a href='#' class='update'>Update</a>
                                    </div>
                                    <div class='del'>
                                        <a href='#' class='Del'>Delete</a>
                                    </div>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div></div>

    <div class="choices" id="choice">
        <div class="addPlt">
            <button id="PltAdd" class="addBtn" type="button" name="AddBtnMore" onclick="show()">Add a Pallet</button>
        </div>
        or
        <div class="addUnits">
            <button class="addBtn" type="button" name="AddBtnMore" onclick="pop()" >Add a Unit</button>
        </div>
    </div>

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
        
        <div class="add-unit">
            <div class="popUp2" id="popUP_2">
                <div class="popHead" >
                    <p class="pHead">Add A Unit/s</p>
                    <p class="pBody">Fill the Pallet location and pruduct Information Bellow.</p>
                </div>
                <div class="resizedtextbox1">
                    <select name="Prod" class="resizedtextbox" id="drop1">
                        <option value=""disabled selected hidden>Choose a Row</option>
                        <option value="Loc">Location</option>
                    </select>
                    
                    <select name="Prod" class="resizedtextbox" id="drop1">
                        <option value=""disabled selected hidden>Choose a Plt No.</option>
                        <option value="Loc">Location</option>
                    </select>
        
                    <select name="Prod" class="resizedtextbox" id="drop1">
                        <option value=""disabled selected hidden>Choose a Prod. Code.</option>
                        <option value="Loc">Location</option>      
                    </select>
                    
                    <select name="Prod" class="resizedtextbox" id="drop1">
                        <option value=""disabled selected hidden>Choose a Batch no.</option>
                        <option value="Loc">Location</option>
                        <option value="addBatch">add a batch number</option>
                    </select> 
                    
                    <input id="inputs" class="ExpBarLocked" type="text" name="row" placeholder="Expiry" >
                    <input id="inputs" class="noCtnBar" type="text" name="row" placeholder="Enter No. of Ctns" >
                    <input id="inputs" class="unitsBarLocked" type="text" name="row" placeholder="Units/Ctn" >
                    <input id="inputs" class="prtBxBar" type="text" name="row" placeholder="Enter Part Box Qty" >
                    <input id="inputs" class="TotalBarLocked" type="text" name="row" placeholder="Total Units" >
                </div>
                
                <div class="addbtn2">
                    <div class="pop2AddPlt">
                        <button class="addBtn" type="submit" name="AddBtnPlt" >ADD</button>
                    </div>
                    
                    <div class="pop1AddMorePlt">
                        <button class="addBtn" type="submit" name="AddBtnMore">ADD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    
</body>
<script src="StockScript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5c09730e7a.js" crossorigin="anonymous"></script>
</html>
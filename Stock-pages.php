<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Stock</title>
        <link rel="stylesheet" href="styles_Stocks.css">
</head>

<body>
    
    <nav class="head">
        
        <h2 class="tag"><a href="home.php" class="tag">My Stock!</a></h2>
        <div class="navi">
            <div class="list">
                <ul class="home"><a href="home.php" class="home">HOME</a></ul>
                <ul class="stock"><a href="Stock-pages.php"class="Stock">STOCK</a></ul>
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
            <select class="choose">
            <option value=""disabled selected hidden>Choose a Warehouse</option>
            <option id="pd"value="pd">Pereita Drive</option>
            <option id="hd"value="hd">Hynds Drive</option>
            <option id="vtl"value="vtl">VTL</option>
            <option id="chrtr"value="chrtr">Charter</option>
            </select>
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
        <a href="Stock-Page_Add a Pallet.php"><button id="PltAdd" class="addBtn" type="link">Add Pallet</button></a>
        <button id="deleteBtn" class="delBtn" type="button" name="delBtn" onclick="toggle()">Delete</button>
        </div>
        
        
        <div class="inventory">
            <div class="table-wraper">
                <table class="StockSheet">
                    <thead>
                        <tr class="headRow">
                            <th class="chckbx"><input type="checkbox">         </th>
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
                                <td class='chckbx'><input type='checkbox'></th>
                                <td name='Row'>". $row["ROW"] ."</td>
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
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
    <div class="footer">
        <footer>
            <h6>Total Ctn:</h6><p id="CtnTotal">;</p>
            <h6>Total units:</h6><p id="UnitsTotal">;</p>
        </footer>
    </div></div>
    
    <div id="Show" class="show">
        <p>Reason to delete</p>
        <select class="reason">
            <option value=""disabled selected hidden>Choose Here!</option>
            <option id="sent"value="sent">Sending to</option>
            <option id="trans"value="trans">Transfering to</option>
            <option id="exp"value="exp">Expired</option>
            <option id="other"value="other">other</option>
        </select>
        <input type="text" class="textAns" name="TextReason">
        <input type="text" class="textAnsLong" name="TextReason">
        <input type="date" class="expDate" name="dateReason">
        <button type="submit" class="ReasonBtn" id="reasonbtn" onclick="toggle()">Submit</button>
    </div>
</body>
<script src="StockScripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5c09730e7a.js" crossorigin="anonymous"></script>
</html>
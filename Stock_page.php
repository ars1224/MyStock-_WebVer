<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Sign Up</title>
        <link rel="stylesheet" href="styles_Stock.css">
</head>

<body>

    <nav class="head">
        <h2 class="tag"><a href="home.php" class="tag">My Stock!</a></h2>
     
        <div class="navi">

            <div class="list">
                <ul class="home"><a href="home.php" class="home">HOME</a></ul>
                <ul class="stock"><a href="Stock_page.php"class="Stock">STOCK</a></ul>
                <ul class="received"><a href="home.php" class="recI">RECEIVED ITEMS</a></ul>
                <ul class="log"><a href="home.php" class="lg">LOG</a></ul>
            </div>   

            <div class="user">
                <i class="fa-regular fa-user"></i>
            </div>
    </nav>

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
            <button class="addBtn" type="submit" name="AddBtn">ADD ITEMS</button>
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
                    echo  "<tr class='datA'>
                    <td  name='Row'>". $row["ROW"] ."</td>
              <td name=PltNo> ". $row["Plt_No"] ."</td>
              <td name='Code'>". $row["Product_code"] ."</td>
              <td name='Batch'>". $row["Batch_No"] ."</td>
              <td name='Exp'>". $row["Expiry"] ."</td>
              <td name='NoCtns'>". $row["No_Ctns"] ."</td>
              <td name='Units'>". $row["Units"] ."</td>
              <td name='PrtBx'>". $row["Part_box"] ."</td>
              <td name=Qty'>". $row["Total_Qty"] ."</td>
              <td>
                  <a href='#' class='update'>Update</a>
                  <a href='#' class='Del'>Delete</a>
              </td>
          </tr>";
                 }
            ?>
        </tbody>

        
        </table>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5c09730e7a.js" crossorigin="anonymous"></script>
</htmls>
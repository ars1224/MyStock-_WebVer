<html>
    <head>
        <meta charset="=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyStock | Sign Up</title>
        <link rel="stylesheet" href="styles_homey.css">
        
</head>

<body>
    <nav class="head">
        <h2 class="tag" href="home.php">My Stock!</h2>
     
        <div class="navi">

            <div class="list">
                <ul class="home"><a href="home.php">HOME</a></ul>
                <ul class="stock"><a href="home.php">STOCK</a></ul>
                <ul class="received"><a href="home.php">RECEIVED ITEMS</a></ul>
                <ul class="log"><a href="home.php">LOG</a></ul>
            </div>   

            <div class="user">
                <i class="fa-regular fa-user"></i>
            </div>
    </nav>
    <div class="home-content">
        <div class="search-bar">
            <div class="search">
                <input class="searchBar" type="text" name="search" placeholder="Looking for..." >
            </div>
            
            <div id="textbx" class="lookingFr">
                <select name="find" class="resizedtextbox" id="drop">
                    <option value=""disabled selected hidden>Department</option>
                    <option value="Factory">Factory</option>
                    <option value="Warehouse">Warehouse</option>
                    <option value="Compounding">Compounding</option>
                </select>
            </div>
            <div class="search-Btn">
                <button class="searchBtn" type="submit" name="searchBtn">Search</button>
            </div>
        </div>
        
        <div class="tables">
            <table class="panels">

                <a href="#">
                    <div class="DivProducts">
                        <ul class="products">Products</ul>
                    </div>
                </a>

                <a href="#">
                    <div class="DivOrders">
                         <ul class="orders">Orders</ul>
                    </div>
                </a>

                <a href="#">
                    <div class="DivReceive"> 
                        <ul class="Receive">Item Received</ul>
                    </div>
                </a>

                <a href="#">
                    <div class="DivExpired">
                        <ul class="expired">Expired</ul>
                    </div>
                </a>
            </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5c09730e7a.js" crossorigin="anonymous"></script>
</body>
</html
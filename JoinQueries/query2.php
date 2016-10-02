<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Order Details</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/query1.css">
    
   <script src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/additional-methods.js" type="application/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="application/javascript"></script>

</head>
<body>
    <nav class="navbar navbar-inverse">

        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="http://freevector.co/wp-content/uploads/2010/10/php-1.png">
                </a>
                <p class="navbar-text navbar-right">Project Submission by DataFreaks</p>
            </div>
        </div>
    </nav>
    <hr/>
            

    <div class = container>
        <div class = "row" >
            <div class="col-lg-5"></div>
            <div class="col-lg-2">
            <h1><span class="label label-default pull-right">Orders</span></h1></div>
            <div class="col-lg-5"></div>
        </div>
        <br/>   
        <div class="row">
            <div class="col-lg-1">
            </div><!-- /.row -->
            <div class="col-lg-10"> 
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="all">All Products</button>
                        </span>                   
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit" name="shipped">Shipped</button>
                        </span> 
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="processed">Processed</button>
                        </span> 
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit" name="incart">In-Cart</button>
                        </span> 
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name = "cancelled">Cancelled</button>
                        </span> 
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit" name="onhold">On-hold</button>
                        </span> 
                    </div>
                </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-1">
            </div><!-- /.row -->

        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "datafreaks";
    $password = "sesame";
    $dbname = "datafreaks";

    $value = "";

    try {
        $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //something posted

            if (isset($_POST['all'])) {
                $value = "all";
            } 
            else if(isset($_POST['shipped'])) {
                $value="shipped";
            }
            else if(isset($_POST['processed'])) {
              $value="processed";
          }
          else if(isset($_POST['incart'])) {
           $value="cart";
       }
       else if(isset($_POST['cancelled'])) {
        $value = "cancelled";
    }
    else if(isset($_POST['onhold'])) {
        $value = "on hold";
    }

}


if($value === "all") {

    $sql_stmt = "SELECT o.status as status,o.id as id,ol.quantity as quantity, p.name as name ,p.price as price FROM orders as o, orderlineitems as ol, product p where userid = 107 AND o.id = ol.orderid AND ol.productid=p.id ;";

}                    
else 
{ 
 $sql_stmt = "SELECT o.status as status,o.id as id,ol.quantity as quantity, p.name as name ,p.price as price FROM orders as o, orderlineitems as ol, product p where userid = 107 AND o.id = ol.orderid AND ol.productid=p.id AND o.status = '".$value."';";
}

$sql = $dbh->prepare($sql_stmt);

if($sql->execute()) {
    $sql->setFetchMode(PDO::FETCH_ASSOC);
}

}   
catch(Exception $error) {
    echo '<p>', $error->getMessage(), '</p>';
}

?>
<br/>
<div class = container>
    <div class="row">
        <div class="col-lg-2">
        </div><!-- /.row -->
        <div class="col-lg-8">
            <div id = "table-wrapper" class= "table-responsive"> 
                <table class="table table-striped">
                    <tbody>
                       <thead>                                       
                        <th>Order-ID</th>              
                        <th>Status</th>              
                        <th>Product Name</th>   
                        <th>Price</th>   
                        <th>Quantity</th>                                      

                    </thead>
                    <?php while($row = $sql->fetch()) { ?>

                        <tr>                                       
                            <td><?php echo $row['id']; ?></td>              
                            <td><?php echo $row['status']; ?></td>              
                            <td><?php echo $row['name']; ?></td> 
                            <td><?php echo $row['price']; ?></td> 
                            <td><?php echo $row['quantity']; ?></td> 
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="col-lg-2">
        </div><!-- /.row -->
    </div>
</div>



</body>
</html>
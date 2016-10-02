<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>No of items in an order</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/query1.css">
    
   <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
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
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <h1><span class="label label-default pull-right">Enter Account Id to get its Shopping Cart</span></h1></div>
            <div class="col-lg-3"></div>
        </div>
        <hr/>    

        <div class = container>
        <div class="row">
            <div class="col-lg-3">
            </div><!-- /.row -->
            <div class="col-lg-6">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Enter Account Id</button>
                    </span>
                    <input name="accountId" type="text" class="form-control" placeholder="Enter a Account Id..">
                </div>
            </form>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-3">
        </div><!-- /.row -->

        </div>
    </div>      

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "sesame";
    $dbname = "datafreaks";
    $flag = FALSE;

    try {
        if(!empty($_REQUEST['accountId'])) {
            $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
            
            $flag = TRUE;
            //$accountId = $_REQUEST['accountId'];
			$accountId = filter_input(INPUT_POST, "accountId");     			
            $sql_stmt = "select p.id as id, p.name as name, p.price as price from product p, product_shoppingcart ps, shoppingcart sc where sc.id = ps.cartid and ps.productid = p.id and sc.accountid = :accountId ;";

            $sql = $dbh->prepare($sql_stmt);

            if($sql->execute(array(':accountId' => $accountId))) {
                $sql->setFetchMode(PDO::FETCH_ASSOC);
            }	
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
                        <th>Product Id</th> 
						<th> Product Description </th>
                        <th>Price</th>                                              
                    </thead>
                    <?php while($flag==TRUE AND $row = $sql->fetch()) { ?>

                        <tr>                                       
                            <td><?php echo $row['id']; ?></td>                                                     
                            <td><?php echo $row['name']; ?></td>   
							<td><?php echo $row['price']; ?></td> 
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
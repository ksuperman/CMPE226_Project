<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>No of items in an order</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/query1.css">
    
    <script   src="https://code.jquery.com/jquery-3.1.0.min. 
    "   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
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
            <h1><span class="label label-default pull-right">You have to put no of items in textbox and you can find out all the user id and order id with that particular no of items.</span></h1></div>
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
                        <button class="btn btn-default" type="submit">Enter No of items in orders</button>
                    </span>
                    <input name="no_of_orders" type="text" class="form-control" placeholder="Enter a number..">
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
        if(!empty($_REQUEST['no_of_orders'])) {
            $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
            
            $flag = TRUE;
            $no_of_orders = $_REQUEST['no_of_orders'];                    
            $sql_stmt = "SELECT ORDERS.USERID as UserId, ORDERS.ID as OrderId,  COUNT(ORDERLINEITEMS.ID) as NoOFItem FROM ORDERS INNER JOIN ORDERLINEITEMS ON ORDERS.ID = ORDERLINEITEMS.ORDERID GROUP BY ORDERID HAVING COUNT(ORDERLINEITEMS.ID) = '$no_of_orders' ;";

            $sql = $dbh->prepare($sql_stmt);

            if($sql->execute()) {
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
                        <th>UserID</th> 
						<th> Order Id </th>
                        <th>No of items in order</th>                                              
                    </thead>
                    <?php while($flag==TRUE AND $row = $sql->fetch()) { ?>

                        <tr>                                       
                            <td><?php echo $row['UserId']; ?></td>                                                     
                            <td><?php echo $row['OrderId']; ?></td>   
							<td><?php echo $row['NoOFItem']; ?></td> 
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
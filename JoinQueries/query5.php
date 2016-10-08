<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>User Phone Number</title>
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
            <h2><span class="label label-default pull-right">Enter the Account Id to get the Mode Of Payments associated with it</span></h2></div>
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
                        <button class="btn btn-default" type="submit">Display Payment Methods</button>
                    </span>
                    <input name="accountId" type="text" class="form-control" placeholder="Enter Account Id Eg. 1048">
                </div>
            </form>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-3">
        </div><!-- /.row -->

        </div>
    </div>      
    <?php include '../orm/modeAddressAccount.php'; ?>
	<?php include '../helpers/tablehelper.php'; ?>
    <?php
    $servername = "localhost";
    $username = "datafreaks";
    $password = "sesame";
    $dbname = "datafreaks";
    $flag = FALSE;

    try {
        if(!empty($_REQUEST['accountId'])) {
            $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
            
            $flag = TRUE;
			$accountId = filter_input(INPUT_POST, "accountId");                  
            $sql_stmt = "SELECT mop.id as 'id',mop.type AS 'type', mop.cardnumber AS 'cardnumber', acc.EMAIL as 'email', CONCAT(CONCAT(addr.CITY, ', '), addr.STATE) as 'address' FROM `modeofpayment` mop, account acc, address addr WHERE mop.ACCOUNTID = acc.ID AND mop.ADDRESSID = addr.ID AND `ACCOUNTID` =:accountId ;";

            $sql = $dbh->prepare($sql_stmt);

            if($sql->execute(array(':accountId' => $accountId))) {
                $sql->setFetchMode(PDO::FETCH_ASSOC);
				$sql->setFetchMode(PDO::FETCH_CLASS, "ModeAddressAccount");
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
                        <th>Payment Type</th> 
						<th>Card Number</th>
                        <th>Email</th> 
                        <th>Address</th>                                              
                    </thead>
                    <?php while($flag == TRUE and $modeAddressAccount = $sql->fetch()) { ?>
                        <?php
							fetchAccountDetails($modeAddressAccount) 
						?>
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
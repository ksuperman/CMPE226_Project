<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Search Categories</title>
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
        <div class="row">
            <div class="col-lg-3">
            </div><!-- /.row -->
            <div class="col-lg-6">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Category</button>
                    </span>
                    <input name="category" type="text" class="form-control" placeholder="E.g. Administration">
                </div>
            </form>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-3">
        </div><!-- /.row -->

        </div>
    </div>
    <?php include '../orm/catalogProduct.php'; ?>
    <?php include '../helpers/tablehelper.php'; ?>
    <?php
        $servername = "localhost";
        $username = "datafreaks";
        $password = "sesame";
        $dbname = "datafreaks";
        $flag = FALSE;

        try {
        $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            if(!empty($_REQUEST['category'])) {
                    $flag = TRUE;

                    $category = filter_input(INPUT_POST, "category");             
                   
                    $sql_stmt = "SELECT p.id as id, p.catalogid as catalogid, c.category as category, p.name as name, p.price as price ,p.description as description  FROM product p, catalog c WHERE p.catalogid = c.id AND c.category = :category"; 
                
                    $sql = $dbh->prepare($sql_stmt);

                    if($sql->execute(array(':category' => $category))) {
                        $sql->setFetchMode(PDO::FETCH_ASSOC);
                        $sql->setFetchMode(PDO::FETCH_CLASS, "CatalogProduct");
                    }
            }
        }   
        catch(Exception $error) {
            echo '<p>', $error->getMessage(), '</p>';
        }
    ?>
    <hr/>
    <div class = container>
            <div class="row">
                <div class="col-lg-2">
                </div><!-- /.row -->
                <div class="col-lg-8">
                    <div id = "table-wrapper" class= "table-responsive"> 
                        <table class="table table-striped">
                            <tbody>
                                 <thead>                                       
                                    <th>ID</th>              
                                    <th>CatalogID</th>  
                                    <th>Category</th>  
                                    <th>Product Name</th>  
                                    <th>Price</th>  
                                    <th>Description</th>  
                                </thead>
                                <?php while($flag == TRUE and $catalogProduct = $sql->fetch()) { ?>
                                    <?php createCatalogProductRow($catalogProduct) ?>
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
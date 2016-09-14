<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/additional-methods.js" type="application/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="application/javascript"></script>

    <script src="js/login.js" type="application/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="http://freevector.co/wp-content/uploads/2010/10/php-1.png">
                </a>
                <p class="navbar-text navbar-right">Project Submission by DataFreaks</p>
            </div>
        </div>
    </nav>
    <div id="app-container">
        <div class="alert alert-warning alert-dismissible hidden" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php
            if (isset($_GET['error'])) {
                $error = $_GET["error"];
                if($error) 
                    echo $error;
            }
          ?>
        </div>
        <div id="signup">
            <h1>Login</h1>
            <div id="signup_form_container">
                <form action="login_action.php" method="post" class="form-horizontal" id="login-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-describedby="basic-addon1">
                    </div>
                    <div id="submit_button_container">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script type="text/javascript">
      <?php
        if (isset($_GET['error'])) {
            $error = $_GET["error"];
            if($error) 
                echo "$('.alert-warning').removeClass('hidden');";
        }
       ?>
    </script>
</body>
</html>

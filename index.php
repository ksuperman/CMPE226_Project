<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signup.css">

    <!--<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>-->
    <!--<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>-->
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/additional-methods.js" type="application/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="application/javascript"></script>


    <script src="js/signup.js" type="application/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/CMPE226/">
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
            <h1>Sign Up</h1>
            <div id="signup_form_container">
                <form action="signup_action.php" method="post" class="form-horizontal" id="signup-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname"  aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Last Name" name="lastname" id="lastname" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email@domain.com" name="email" id="email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="date" class="form-control" placeholder="Date of Birth" name="dob" id="dob" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <select class="form-control" name="sex" id="sex">
                            <option hidden >Sex</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Address" name="address" id="address" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" id="phone_number" aria-describedby="basic-addon1">
                    </div>

                    <hr></hr>
                    <div class="input-group">                       
                            <input type="checkbox" name="subscription" id="subscription"/> Subscribe for Newsletter
                    </div>
                    <hr></hr>
                    <div class = "input-group text-center">
                        <h5>Preferred Mode of Contact: </h5>
                        <input type="radio" name="contact_mode" value="EMAIL">Email<br>
                        <input type="radio" name="contact_mode" value="TEXT">Text Message
                    </div>

                    <hr></hr>
                    <div id="submit_button_container">
                        <input type="submit" class="btn btn-success" name="submit" value="Create Account"></input>
                        <a href="login.php" class="btn btn-success">Existing User Login</a>
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

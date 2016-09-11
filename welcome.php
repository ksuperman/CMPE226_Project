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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="application/javascript"></script>
	<!--<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js" type="application/javascript"></script>-->
	<!--<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/additional-methods.js" type="application/javascript"></script>-->

	<script src="js/signup.js" type="application/javascript"></script>
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


	<div class="fonts"> 
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"> <h1 class="fonts">User Details</h1> </div>
			<div class="col-sm-4"></div>
		</div>



		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">

				<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "ONLINESHOPPING";


				try {
					$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

					$sql_stmt = "SELECT FIRST_NAME, LAST_NAME, EMAIL, USER_ID, DATE_OF_BIRTH, GENDER, ADDRESS, CONTACT_NUMBER FROM USER_DETAILS WHERE USER_ID='".$_GET["username"]."';";
					$sql = $dbh->prepare($sql_stmt);

					if($sql->execute()) {
						$sql->setFetchMode(PDO::FETCH_ASSOC);
					}
				}
				catch(Exception $error) {
					echo '<p>', $error->getMessage(), '</p>';
				}

				?>


				<div class= "table-responsive">

					<table class="table-striped">          
						
							<?php while($row = $sql->fetch()) { ?>

								<tr>
									<td>First Name</td>
									<td><?php echo $row['FIRST_NAME']; ?></td>	        	
								</tr>
								<tr>
									<td>Last Name</td>
									<td><?php echo $row['LAST_NAME']; ?></td>	        	
								</tr>
								<tr>
									<td>Email</td>
									<td><?php echo $row['EMAIL']; ?></td>	        	
								</tr>

								<tr>
									<td>User id</td>
									<td><?php echo $row['USER_ID']; ?></td>	        	
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td><?php echo $row['DATE_OF_BIRTH']; ?></td>	        	
								</tr>
								<tr>
									<td>Gender</td>
									<td><?php echo $row['GENDER']; ?></td>	        	
								</tr>
								<tr>
									<td>Address</td>
									<td><?php echo $row['ADDRESS']; ?></td>	        	
								</tr>
								<tr>
									<td>Contact Number</td>
									<td><?php echo $row['CONTACT_NUMBER']; ?></td>	        	
								</tr>
								<?php } ?>
							</table>

						</div>
					
				</div>


			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Welcome Page</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/signup.css">

	<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="application/javascript"></script>

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

	<div id = "background">
		<div  class="fonts text-center container-fluid"> 
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4 "> <h1 class="centerBlock fonts">User Details</h1> </div>
				<div class="col-sm-4"></div>
			</div>



			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 ">

					<?php
					$servername = "localhost";
					$username = "datafreaks";
					$password = "sesame";
					$dbname = "DATAFREAKS";


					try {
						$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

						$sql_stmt = "SELECT FIRST_NAME, LAST_NAME, EMAIL, USER_ID, DATE_OF_BIRTH, GENDER, ADDRESS, CONTACT_NUMBER,SUBSCRIPTION,CONTACT_MODE FROM USER_DETAILS WHERE USER_ID='".$_GET["username"]."';";
						$sql = $dbh->prepare($sql_stmt);

						if($sql->execute()) {
							$sql->setFetchMode(PDO::FETCH_ASSOC);
						}
					}
					catch(Exception $error) {
						echo '<p>', $error->getMessage(), '</p>';
					}

					?>
					

					<div id = "table-wrapper" class= "table-responsive">

						<table class="table table-striped">
								<tbody>
							
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
									<tr>
										<td>Subscribed to Newsletter</td>
										<td><?php echo $row['SUBSCRIPTION']; ?></td>	        	
									</tr>
									<tr>
										<td>Contact Mode</td>
										<td><?php echo $row['CONTACT_MODE']; ?></td>	        	
									</tr>
									<?php } ?>
									</tbody>
								</table>

							</div>
						
					</div>


				<div class="col-md-4"></div>

				
				
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	
</body>
</html>
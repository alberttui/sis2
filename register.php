<?php
$studentNo = "";
$lastName = "";
$firstName = "";
$emailAddress = "";
$password = "";
$birthDate = null;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to the Student Registration Page of Berto's College</title>
		<meta keyword="author" value="Albert Tui"/>
		<meta keyword="description" value="WEBDEVT Exercise #3" />
		<meta charset="utf-8" />
		<link href="css/bootstrap.min.csss" type ="text/css" rel="stylesheet"/>
		<link href="css/master.css" type ="text/css" rel ="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
				<div class="well">
<<<<<<< HEAD
					<form method="POST" action="welcome.php" class="form-horizontal">
                     <br>
					 <br>
					 <div class="form-input">
                     <input type="text" name="sid" placeholder="Enter Student ID #" class="form-control" required>
                     </div>
                     <br>

                     <div class="form-input">
                     <input type="text" name="ln" placeholder="Enter Last Name" class="form-control" required>
                     </div>
                     <br>

                     <div class="form-input">
                     <input type="text" name="fn" placeholder="Enter First Name" class="form-control" required>
                     </div>
                     <br>

                     <div class="form-input">
                     <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
                     </div>
                     <br>

                     <div class="form-input">
                     <input type="password" name="pwd" placeholder="Enter Password" class="form-control" required>
                     </div>
					 <br>

					 <div class="form-input">
                     <input type="date" name="bday" placeholder="Enter Birthdate dd/mm/yyyy" class="form-control" required>
                     </div>					 
                     <br>
					 <br>
					
					 <div class="form-group">
					 <button name="register"
					 class= "btn btn-success">
					 Register
					 </button>
					 <br>
					 <br>
					 
					 <footer class="foot">
                     <hr>
                     <h2>Berto's College</h2>
					 </hr>
                     </footer>
					 
					 </div>
                     <div>
					 </form>
=======
					<form method="POST" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">
								Student ID
							</label>
							<div class="col-lg-8">
								<input type="text" name="sid"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Last Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="ln"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								First Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="fn"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Email Address
							</label>
							<div class="col-lg-8">
								<input type="email" name="email"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Password
							</label>
							<div class="col-lg-8">
								<input type="password" name="pwd"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Birthdate
							</label>
							<div class="col-lg-8">
								<input type="date" name="bday"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="control col-lg-offset-4 col-lg-4">
								<button name="register"
								class= "btn btn-success">
								Register
							</button>
							</div>
                        <div>
					</form>
>>>>>>> origin/master
				</div>
			</div>
		</div>
	</body>
</html>
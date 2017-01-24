<?php
      if(isset($_POST['register']))
      {
        $studentNo = $_POST['sid'];
        $lastName = $_POST['ln'];
        $firstName = $_POST['fn'];
        $emailAddress = $_POST['email'];
        $password = $_POST['pwd'];
        $birthDate = $_POST['bday'];
<<<<<<< HEAD
=======

        echo "Welcome, " . $firstName . " " . $lastName . "!<br/>".
        'Your ID Number is ' . $studentNo . '. <br/>
        Your password is ' . $password . '. <br/>
        Your BirthDate is ' . $birthDate . '. <br/><br/>
        The time is ' . date('c');
>>>>>>> origin/master
      } 
      else
      {
      	header('location: register.php');
      }
?>
<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo "Welcome, ID " . $studentNo . "!"?></title>
		<link href="css/bootstrap.min.csss" type ="text/css" rel="stylesheet"/>
		<link href="css/style.css" type ="text/css" rel ="stylesheet">
	</head>
	<body>
	<br>
	<br>
		<div class="prof-box">
		<h1 class="text-center">Your Profile Page</h1>
		<br>
        <p>
        <?php
          echo "Welcome, " . $firstName . " " . $lastName . "!<br/>".
          'Your ID Number is ' . $studentNo . '. <br/>
		   Your Email is ' . $emailAddress . '. <br/>
           Your password is ' . $password . '. <br/>
           Your BirthDate is ' . $birthDate . '. <br/><br/><br/>
           The time is ' . date('c');
         ?>
        </p>
		<a href="register.php">
        <button>Log Out</button>
        </a>
		</div>
		</div>
		<br>
		<br>
		<footer class="foot">
        <hr>
        <h2>Berto's College</h2>
		</hr>
        </footer>
	</body>
=======
<html>
	<head>
		<title><?php echo $firstName . ' ' . $lastName </title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
    </body>
>>>>>>> origin/master
</html>
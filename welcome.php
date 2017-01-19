<?php
      if(isset($_POST['register']))
      {
        $studentNo = $_POST['sid'];
        $lastName = $_POST['ln'];
        $firstName = $_POST['fn'];
        $emailAddress = $_POST['email'];
        $password = $_POST['pwd'];
        $birthDate = $_POST['bday'];

        echo "Welcome, " . $firstName . " " . $lastName . "!<br/>".
        'Your ID Number is ' . $studentNo . '. <br/>
        Your password is ' . $password . '. <br/>
        Your BirthDate is ' . $birthDate . '. <br/><br/>
        The time is ' . date('c');
      } 
      else
      {
      	header('location: register.php');
      }
?>
<html>
	<head>
		<title><?php echo $firstName . ' ' . $lastName </title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
    </body>
</html>
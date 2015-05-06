
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<center>
<h1>Please enter email and password to register</h1>

<form action="registerprocess.php" METHOD="POST" class="home1">
    <?php
	        session_start();
	        if( isset( $_SESSION['errormsg'] ) ) {
             //echo "<h3>".$survey_id."</h3><br>";
             echo $_SESSION['errormsg'];
             // delete the message from the session, so that we show it only once
             unset( $_SESSION['errormsg'] );
		}
	   ?> 
	<table align="center" >
      <tr>
        <td><h3>username: </h3></td>
        <td><input type="email" name="registered_email" required></td>
      </tr>
      <tr>
        <td><h3>Password:</h3></td>
        <td><input type="password" name="registered_password" required></td> 
        </tr>
        <tr>
        <td></td> 
        <td class="go"><input type="submit" name="register" value="Register" /></td>
      </tr>
    </table>
    </form>
</center>
</body>
</html>
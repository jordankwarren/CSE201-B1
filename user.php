


<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="css/normalize.css" >
<link rel="stylesheet" href="css/signUpForm.css" >
<html>
<form  method="POST" action='user.php'>
<div class="container">
	<div align="center">
  <h1>Sign Up</h1>
  <p>Please fill in this form to create an account.</p>
  <hr>

  <label for="email"><b>Email</b></label>
  <input type="email" placeholder="Enter Email" name="email" required>

  <label for="usrname"><b>User Name</b></label>
  <input type="usrname" placeholder="Enter User Name" name="usrname" required>

  <label for="psw"><b>Password</b></label>
  <input type="psw" placeholder="Enter Password" name="psw" required>

  <label for="psw-repeat"><b>Repeat Password</b></label>
  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

  <div class="clear">
		<input type="button" value="Cancel" onclick="javascrtpt:window.location.href='nbaWebsite.html'">
      <input type="submit" name="submit" value="submit" onclick="javascrtpt:window.location.href='loggedInWebpage.html'">
   
    </div>

</div>
</div>
</form>
</html>
<?php
$servername = "localhost";
$username = "cse383";
$password = "HoABBHrBfXgVwMSz";
$dbname = "cse383";
$email="";
$usrname="";
$psw="";
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("fail to connect: " . $conn->connect_error);
}

$sql = "INSERT INTO userinfor(email, usrname, password)
VALUES ('$_POST[email]', '$_POST[usrname]', '$_POST[psw]');";

if ($conn->multi_query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<meta http-equiv='refresh' content='1;url=loggedInWebpage.html'>";
$conn->close();
?>

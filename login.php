<!DOCTYPE html>
  <link rel="stylesheet" type="text/css" href="css/login.css"/>
<html>
<form  method="POST" action='login.php'>
<div class="container" align="center">
	<div align="center">
  <h1>Log in</h1>
  <p>Please fill the information to login.</p>
  <hr>
  <p><label for="usrname" class="label_input"><b>User Name</b></label>
  <input type="text" placeholder="Enter User Name" name="usrname" required="required" class="text_field"></p>

  <p><label for="psw" class="label_input"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required="required" class="text_field"></p>
	<input type="button" value="Cancel" onclick="javascrtpt:window.location.href='nbaWebsite.html'">
	<input type="submit" name="submit" value="submit" >
</div>
</div>
</form>
</html>

<?php
session_start();
if(!isset($_POST['submit'])){
	exit();
}
$name=$_POST['usrname'];
$_SESSION['val']=$name;
$psw=$_POST['psw'];
if($name==""||$psw==""){
	echo "<script>alert('Please enter the username or password!')</script>";
}
else{
	$servername = "localhost";
	$username = "cse383";
	$password = "HoABBHrBfXgVwMSz";
	$dbname = "cse383";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// check connection
	 if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //验证内容是否与数据库的记录吻合。
        $sql = "SELECT * FROM userinfor WHERE (usrname='$name') AND (password='$psw')";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<meta http-equiv='refresh' content='0.5;url=loggedInWebpage.php'>";
			}
		else {
			 echo "<meta http-equiv='refresh' content='0.5;url=login.html'>";
		}
		
	}
?>

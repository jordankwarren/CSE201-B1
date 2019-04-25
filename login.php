<?php
if(!isset($_POST['submit'])){
	exit();
}
$name=$_POST['usrname'];
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

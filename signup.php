
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

<?php
  $name = isset($_POST['name']);
  $user = isset($_POST['username']);

  $servername = "localhost";
  $username = "cse383";
  $password = "HoABBHrBfXgVwMSz";
  $dbname = "cse383";

  // create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // check connection
  if ($conn->connect_error) {
      die("fail to connect: " . $conn->connect_error);
  }

  $sql = "INSERT INTO favoritePlayer(usrname,playersName)
  VALUES ('user','$_POST[name]')";

  if ($conn->multi_query($sql) === TRUE) {
  }
  $conn->close();

?>



<html>

<head>

  <title>Add a Player</title>
</head>
<body>
  <p class="title"> Add Your Favorite Player </p>
  <div class="fav-page">
    <form method="post" name="dataform" action="favorite.php">
      <label for="user"><b> User Name</b></label>
      <p><input type="text" name="username" /> </p>
      <label for="name"><b> Player Name</b></label>
      <p><input type="text" name="name" /> </p>

      <input type="submit">
      <input type="button" value="Cancel" onclick="javascrtpt:window.location.href='loggedInWebpage.html'">

    </form>
  </div>
</html>


<style>
.login-page{
  border-radius: 4px;
}
.title{
  text-align: center;
}
.login-page{
  width: 30%;
  margin: 0 auto;
  border-radius: 4px;
}

</style>

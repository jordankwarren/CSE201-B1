-
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="css/normalize.css" >
<link rel="stylesheet" href="css/loggedIn.css" >
</head>
<body>
  <nav>
<h1>
  Welcome
</h1>

<div class="create">
    <a class="createB" style="color = black; text-decoration: none" href="createAPlayer.php"  target="_blank" rel="nofollow noopener">Create a Player</a></div>
</div>


  <p> <a class ="playerB" style="text-decoration: none" href = "players.html ">Players </a></p>
  <p> <a class = "addFav" style="text-decoration: none" href = "favorite.php">Add Favorite Player</a></p>

<div class="login">
  <a class="loginA" style="color = black; text-decoration: none" href="nbaWebsite.html"  target="_blank" rel="nofollow noopener">Logout </a></div>

  </div>

  <ul div class="list1": style="width: 250px;  height: 500px; overflow: auto;">

</ul>


<img src="img/nba.png"  class="center">

<p class = "favPlayer">
  Favorite players
</p>
<p class="favBox">

</p>
<p class = "highlightHead">
  Highlights
</p>
<p class = "highlightBox">
  Top 10 Plays!
<video src="img/plays.mp4"
 controls width="450" height ="450" preload></video>
</p>
<p class ="news">
  Latest News
</p>

<p class = "newsBox">
  Kevin Durant says he has not made a decision on upcoming free agency yet!
  <br> <br>
  Check out more information on this
  <a class = "newsTag" style="text-decoration: none"href="http://www.sportingnews.com/us/nba/news/kevin-durant-addresses-upcoming-free-agency-says-he-has-yet-to-make-decision/rsnhckr4lzvy1mpjj6h1suanv"> here </a>

  <img src="img/durant.jpg" class ="newsBoxPic">
</p>
<p class = "Playoffs" >
  Playoffs </p>
<p class = "playoffBox">
<img src="img/playoff.png" class = "playoffPic">
 </p>

<img src = "img/greek.png" class = "greekPic">
<img src = "img/leonard.png" class = "kawPic">
<img src = "img/kyrie.png" class = "kyriePic">
</body>
</html>
<?php
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

  $sql = "SELECT playersName FROM favoritePlayer,usrinfor WHERE usrname=usrname";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo $rows[playersName];
      echo "<meta http-equiv='refresh' content='0.5;url=loggedInWebpage.html'>";
}


  if ($conn->multi_query($sql) === TRUE) {

  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  echo "<meta http-equiv='refresh' content='1;url=loggedInWebpage.html'>";
  $conn->close();



  ?>


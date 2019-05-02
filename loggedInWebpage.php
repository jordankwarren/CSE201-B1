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
    <a class="createB" style="color = black; text-decoration: none" href="createAPlayer.php" rel="nofollow noopener">Create a Player</a></div>
</div>


  <p> <a class ="playerB" style="text-decoration: none" href = "players.html ">Players </a></p>
  <p> <a class = "addFav" style="text-decoration: none" href = "favorite.php">Add Favorite Player</a></p>

<div class="login">
  <a class="loginA" style="color = black; text-decoration: none" href="nbaWebsite.html"  rel="nofollow noopener">Logout </a></div>

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
  Top 5 Plays of the Night!
</p>
<p class = "highlightBox">

<video src="img/top5.mp4"
 controls preload></video>
</p>
<p class ="news">
  Latest News

</p>
<div class = "newsBox">
<ul class="newsText">
  <li>Lillard hits game winner to send Portland past OKC in game 5! Check out more information on this <a class = "newsTag" style="text-decoration: none"href="https://www.nba.com/article/2019/04/24/nba-reacts-damian-lillard-game-winner-okc?collection=news" target="_blank"> here </a>
</li><br>
<li>Warriors lose to Clippers and are heading to game 6 can they pull out the series? Check out more information on this <a class = "newsTag" style="text-decoration: none"href="https://ftw.usatoday.com/2019/04/warriors-nba-playoffs-clippers-curry-durant" target="_blank"> here </a>
</li><br>

</ul>
</div>
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
session_start();
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

  $sql = "SELECT playersName FROM favoritePlayer,usrinfor WHERE usrname=$_SESSION['val']";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo $rows[playersName];
     echo "<h1> 123456</h1>";
}


  if ($conn->multi_query($sql) === TRUE) {
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  echo "<meta http-equiv='refresh' content='1;url=loggedInWebpage.html'>";
  $conn->close();



  ?>


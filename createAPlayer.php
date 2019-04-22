<?php
  $name = $_POST['name'];
  $team = $_POST['team'];
  $position = $_POST['position'];
  $height = $_POST['height'];
  $avg_pts = $_POST['avgPoints'];
  $avg_asts = $_POST['avgAssists'];
  $avg_rebs = $_POST['avgRebounds'];
  $avg_stls = $_POST['avgSteals'];
  $avg_blks = $_POST['avgBlocks'];

  $subject = 'New Player Data';
  $body =    "Name: .$name" .   
              "\nPosition: $position" .
              "\nHeight: $height" .
              "\nAvg Points: $avg_pts" .
              "\nAvg Assists: $avg_asts" .
              "\nAvg Rebounds: $avg_rebs" .
              "\nAvg Steals: $avg_stls" .
              "\nAvg Blocks: $avg_blks";
  $headers = "From: playerdata@nbaproject.com";
  mail("tbennettr@gmail.com", $subject, $body,$headers);

?>


<html>

<head>

  <title>Create a Player</title>
</head>
<body>
  <div class="login-page">
    <form method="post" name="dataform" action="createAPlayer.php">
      <label for="name"><b>Name</b></label>
      <input type="text" name="name" placeholder="name"/>
      <label for="team"><b>Team</b></label>
      <input type="text" name="team" placeholder="team"/>
      <label for="position"><b>Position</b></label>
      <input type="text" name="position" placeholder="position"/>
      <label for="height"><b>Height</b></label>
      <input type="text" name="height" placeholder="height"/>
      <label for="avg points"><b>Avg Points</b></label>
      <input type="text" name="avgPoints" placeholder="avg points"/>
      <label for="avg assists"><b>Avg Assists</b></label>
      <input type="text" name="avgAssists" placeholder="avg assists"/>
      <label for="avg rebounds"><b>Avg Rebounds</b></label>
      <br></br>
      <input type="text" name="avgRebounds" placeholder="avg rebounds"/>
      <label for="avg steals"><b>Avg Steals</b></label>
      <input type="text" name="avgSteals" placeholder="avg steals"/>
      <label for="avg blocks"><b>Avg Blocks</b></label>
      <input type="text" name="avgBlocks" placeholder="avg blocks"/>
      <input type="submit">
      <input type="button" value="Cancel" onclick="javascrtpt:window.location.href='loggedInWebpage.html'">

    </form>
  </div>
</html>

<style>
.login-page{
  border-radius: 4px;
}

</style>

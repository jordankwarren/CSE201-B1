<?php
  $name = isset($_POST['name']);
  $team = isset($_POST['team']);
  $position = isset($_POST['position']);
  $height = isset($_POST['height']);
  $avg_pts = isset($_POST['avgPoints']);
  $avg_asts = isset($_POST['avgAssists']);
  $avg_rebs = isset($_POST['avgRebounds']);
  $avg_stls = isset($_POST['avgSteals']);
  $avg_blks = isset($_POST['avgBlocks']);

  $to = 'rooptb@miamioh.edu';
  $subject = 'New Player Data';
  $body =    "Name: " .   $name .
              "\nPosition: " . $position .
              "\nHeight: " . $height .
              "\nAvg Points: " . $avg_pts .
              "\nAvg Assists: " . $avg_asts .
              "\nAvg Rebounds: " . $avg_rebs .
              "\nAvg Steals: " . $avg_stls .
              "\nAvg Blocks: " . $avg_blks;
  $headers = "From: playerdata@nbaproject.com";
  mail($to, $subject, $body,$headers);

?>


<html>

<head>

  <title>Create a Player</title>
</head>
<body>
  <p class="title"> Create a Player Form </p>
  <div class="login-page">
    <form method="post" name="dataform" action="createAPlayer.php">
      <label for="name"><b>Name</b></label>
      <p><input type="text" name="name" /> </p>
      <label for="team"><b>Team</b></label>
    <p>  <input type="text" name="team" /> </p>
      <label for="position"><b>Position</b></label>
    <p>  <input type="text" name="position" /> </p>
      <label for="height"><b>Height</b></label>
    <p>  <input type="text" name="height" /> </p>
      <label for="avg points"><b>Avg Points</b></label>
      <p><input type="text" name="avgPoints"/> </p>
      <label for="avg assists"><b>Avg Assists</b></label>
      <p><input type="text" name="avgAssists" /> </p>
      <label for="avg rebounds"><b>Avg Rebounds</b></label>
      <p><input type="text" name="avgRebounds"/> </p>
      <label for="avg steals"><b>Avg Steals</b></label>
    <p>  <input type="text" name="avgSteals" /> </p>
      <label for="avg blocks"><b>Avg Blocks</b></label>
    <p>  <input type="text" name="avgBlocks" /> </p>
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

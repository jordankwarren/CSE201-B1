<?php
if(isset($_REQUEST['name'])){

  $name = $_REQUEST['name'];
  $team = $_REQUEST['team'];
  $position = $_REQUEST['position'];
  $height = $_REQUEST['height'];
  $avg_pts = $_REQUEST['avgPoints'];
  $avg_asts = $_REQUEST['avgAssists'];
  $avg_rebs = $_REQUEST['avgRebounds'];
  $avg_stls = $_REQUEST['avgSteals'];
  $avg_blks = $_REQUEST ['avgBlocks'];

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

}
?>


<html>

<head>

  <title>Create a Player</title>
</head>
<body>
  <p class="title"> Create a Player Form </p>
  <div class="login-page">
    <form method="post" id = "dataform" name="dataform" action="createAPlayer.php">
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

      <input type="submit" value="submit" onclick="javascrtpt:window.location.href='loggedInWebpage.php'">
      <input type="button" value="Cancel" onclick="javascrtpt:window.location.href='loggedInWebpage.php'">

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

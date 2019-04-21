<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $team = $_POST['team'];
  $position = $_POST['position'];
  $height = $_POST['height'];
  $avg_pts = $_POST['avg points'];
  $avg_asts = $_POST['avg assists'];
  $avg_rebs = $_POST['avg rebounds'];
  $avg_stls = $_POST['avg steals'];
  $avg_blks = $_POST['avg blocks'];
  $to = 'rooptb@miamioh.edu';
  $subject = 'New Player Data';
  $body =    "Name: "  .$name .
              "\nPosition: " . $position .
              "\nHeight: " . $height .
              "\nAvg Points: " . $avg_pts .
              "\nAvg Assists: " . $avg_asts .
              "\nAvg Rebounds: " . $avg_rebs .
              "\nAvg Steals: " . $avg_stls.
              "\nAvg Blocks: " . $avg_blks;
  $headers = "From: playerdata@nbaproject.com\r\n";
  mail($to, $subject, $body, $headers);
}
?>

<!-- <<?php
$msg = "Testing if sends email";;

mail("tbennettr@gmail.com","Testing",$msg);

?> -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
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
      <input type="text" name="avg points" placeholder="avg points"/>
      <label for="avg assists"><b>Avg Assists</b></label>
      <input type="text" name="avg assists" placeholder="avg assists"/>
      <label for="avg rebounds"><b>Avg Rebounds</b></label>
      <br></br>
      <input type="text" name="avg rebounds" placeholder="avg rebounds"/>
      <label for="avg steals"><b>Avg Steals</b></label>
      <input type="text" name="avg steals" placeholder="avg steals"/>
      <label for="avg blocks"><b>Avg Blocks</b></label>
      <input type="text" name="avg blocks" placeholder="avg blocks"/>
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

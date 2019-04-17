<?php
if($_POST["dataform"]) {
  mail("jordankw@miamioh.edu", "Player Data", $_POST["dataform"], "From:
    playerdata@nbaproject.com");
  mail("huangw11@miamioh.edu", "Player Data", $_POST["dataform"], "From:
    playerdata@nbaproject.com");
  mail("rooptb@miamioh.edu", "Player Data", $_POST["dataform"], "From:
    playerdata@nbaproject.com");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Create a Player</title>
</head>
<body>
  <div class="login-page">
  <div class="form">
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
      <input type="text" name="avg rebounds" placeholder="avg rebounds"/>
      <label for="avg steals"><b>Avg Steals</b></label>
      <input type="text" name="avg steals" placeholder="avg steals"/>
      <label for="avg blocks"><b>Avg Blocks</b></label>
      <input type="text" name="avg blocks" placeholder="avg blocks"/>
      <input type="submit">
    </form>
  </div>
</div>
</html>

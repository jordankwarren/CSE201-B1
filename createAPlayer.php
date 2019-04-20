<!-- <?php
if(isset($_POST['name']) && isset($_POST['team']) && isset($_POST['position'])
&& isset($_POST['height']) && isset($_POST['avg points']) &&
isset($_POST['avg assists']) && isset($_POST['avg assists']) &&
isset($_POST['avg rebounds']) && isset($_POST['avg steals']) &&
isset($_POST['avg blocks'])) {
  $name = $_POST['name'];
  $team = $_POST['team'];
  $position = $_POST['position'];
  $height = $_POST['height'];
  $avg_pts = $_POST['avg points'];
  $avg_asts = $_POST['avg assists'];
  $avg_rebs = $_POST['avg rebounds'];
  $avg_stls = $_POST['avg steals'];
  $avg_blks = $_POST['avg blocks'];
  $to = 'jordankw@miamioh.edu, huangw11@miamioh.edu, rooptb@miamioh.edu';
  $subject = 'New Player Data';
  $body = '<html>
            <body>
              <h2>Player Data</h2>
              <hr>
              <p>Name:<br>'.$name.'</p>
              <p>Position:<br>'.$position.'</p>
              <p>Height:<br>'.$height.'</p>
              <p>Avg Points:<br>'.$avg_pts.'</p>
              <p>Avg Assists:<br>'.$avg_asts.'</p>
              <p>Avg Rebounds:<br>'.$avg_rebs.'</p>
              <p>Avg Steals:<br>'.$avg_stls.'</p>
              <p>Avg Blocks:<br>'.$avg_blks.'</p>
            </body>
          </html>';

  $headers = "From: playerdata@nbaproject.com\r\n";
  $headers .= "Reply-To: playerdata@nbaproject.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8";

  $send = mail($to, $subject, $body, $headers);
  if($send) {
    echo '<br>';
    echo 'Thanks for adding!';
  } else {
    echo 'error';
  }
}
?> -->
<<?php
$msg = "Testing if sends email";;

mail("tbennettr@gmail.com","Testing",$msg);

?>

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
      <br>
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

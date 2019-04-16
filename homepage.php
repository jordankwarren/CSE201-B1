<?php

$dbHost = '134.53.86.241';
$dbUser = 'root';
$dbPass = 'password';

$dbName = 'nba';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass, $dbName) ;

if($conn -> connect_errno > 0 )
{
  die('Unable to connect to DataBase [' . $conn->connect_error. ']');

}
  $sql = "SELECT * FROM name" ;
  if(!$result= $conn->query($sql))
  {
    die('error with query [' . $conn->error . ']');
  }

  while($row = $result->fethc_assoc())
  {
    echo .$row;
  }
  $result-> free();
  $conn->close($conn);





  ?>

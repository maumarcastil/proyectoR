
<?php
$pdo = new mysqli("r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","kbo4ee4or72mzf9p","o67j9b8m1ibmgya3","f0hztjawrgotplbb");

// Check connection
if ($pdo -> connect_errno) {
  echo "Failed to connect to MySQL: " . $pdo -> connect_error;
  exit();
}

session_start();
?>

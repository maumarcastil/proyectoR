
<?php
$pdo = new mysqli("localhost","root","","proyecto");

// Check connection
if ($pdo -> connect_errno) {
  echo "Failed to connect to MySQL: " . $pdo -> connect_error;
  exit();
}

session_start();
?>

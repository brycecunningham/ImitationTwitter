<?php

session_start();
?>

<?php
// Connection parameters 
$host = 'cspp53001.cs.uchicago.edu';
$username = 'bcunningham';
$password = '45rt45RT';
$database = $username.'DB';

// Attempting to connect
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());
//print 'Connected successfully!<br>';

// Getting the input parameter (user):
//$tweetbody = $_REQUEST['tweetbody'];

$testusername = $_SESSION["username"];

$query = "SELECT tweetbody FROM Tweets WHERE username = '$testusername'";
//'". $_SESSION['username']."'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

print '<ul>';
while ($tuple = mysqli_fetch_row($result)) {
      print "<li>$tuple[0]";
}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 


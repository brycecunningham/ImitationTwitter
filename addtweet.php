<?php

session_start();

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
$tweetbody = $_REQUEST['tweetbody'];

$_SESSION["tweetbody"] = $tweetbody;

$testusername = $_SESSION["username"];

$query = "INSERT INTO Tweets (tweetID, username, tweetbody, numCharacters) VALUES (NOW(),'$testusername', '$tweetbody', 100)";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

if ($result) {
header('Location: http://cgi-cspp.cs.uchicago.edu/~bcunningham/cs53001/mytweets.php');
}

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 


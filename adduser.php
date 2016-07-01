<?php

//session_start();

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
$username = $_REQUEST['username'];
$name = $_REQUEST['name'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];

$_SESSION["username"] = $username; 
$_SESSION["name"] = $name; 
$_SESSION["city"] = $city; 
$_SESSION["state"] = $state; 

$query = "INSERT INTO Users (username, name, numFollowers, numFollowing, numTweets) VALUES ('$username', '$name', 0, 0, 0)";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

$query = "INSERT INTO FromLocation (username, city, state) VALUES ('$username', '$city', '$state')";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

if ($result) {
header('Location: http://cgi-cspp.cs.uchicago.edu/~bcunningham/cs53001/final.html');
}

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 


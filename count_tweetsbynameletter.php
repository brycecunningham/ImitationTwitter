1;2c<?php

// Connection parameters 
$host = 'cspp53001.cs.uchicago.edu';
$username = 'bcunningham';
$password = '45rt45RT';
$database = $username.'DB';

// Attempting to connect
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());
print 'Connected successfully!<br>';

// Getting the input parameter (city, state):
$firstletter = $_REQUEST['firstletter'];


// Get the attributes of the user with the given username
$query = "SELECT COUNT(tweetbody) AS firstlettertweets FROM Users JOIN Tweets USING (username) WHERE name LIKE '$firstletter%'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

$tuple = mysqli_fetch_array($result, MYSQL_ASSOC)
  or die("User $user not found!");

print "Names that start with  <b>$firstletter</b>, <b>$state</b> have the following total tweets:<br>";

print '<ul>';
print $tuple['firstlettertweets'];
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 
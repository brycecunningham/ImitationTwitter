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
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];

// Get the attributes of the user with the given username
$query = "SELECT name FROM Users JOIN FromLocation USING (username) WHERE city = '$city' AND state = '$state'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));


print " <b>$city</b>, <b>$state</b> has the following users:<br>";

// Printing user attributes in HTML
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
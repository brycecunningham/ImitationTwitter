<?php

// Connection parameters 
$host = 'cspp53001.cs.uchicago.edu';
$username = 'bcunningham';
$password = '45rt45RT';
$database = $username.'DB';

// Attempting to connect 
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());
print 'Connected successfully!<br>';

// Selecting a database
//   Unnecessary in this case because we have already selected 
//   the right database with the connect statement.  
mysqli_select_db($dbcon, $database)
   or die('Could not select database');
print 'Selected database successfully!<br>';

// Listing tables in your database
$query = 'SELECT city, COUNT(tweetbody) FROM Tweets JOIN FromLocation USING (username) WHERE state = \'CA\' GROUP BY city HAVING COUNT(tweetbody) >= 20';
$result = mysqli_query($dbcon, $query)
  or die('Show tables failed: ' . mysqli_error());

print "CA cities with at least 20 tweets are:<br>";

// Printing table names in HTML
print '<ul>';
while ($tuple = mysqli_fetch_row($result)) {
   print "<li> City: $tuple[0]";
   print "<li> Tweet Count: $tuple[1]";
   print '<li>';
}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 
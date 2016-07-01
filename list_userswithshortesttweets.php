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
$query = 'SELECT name, city, state, tweetbody AS shortesttweets, numCharacters FROM Users JOIN Tweets USING (username) JOIN FromLocation USING (username) WHERE numCharacters <= ALL (SELECT numCharacters FROM Tweets)';
$result = mysqli_query($dbcon, $query)
  or die('Show tables failed: ' . mysqli_error());

print "The shortest tweets are:<br>";

// Printing table names in HTML
print '<ul>';
while ($tuple = mysqli_fetch_row($result)) {
   print "<li> Name: $tuple[0]";
   print "<li> City: $tuple[1]";
   print "<li> State: $tuple[2]";
   print "<li> Tweet Body: $tuple[3]";
   print "<li> Number of Characters: $tuple[4]";
   print '<li>';

}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 
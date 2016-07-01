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
$user = $_REQUEST['user'];

// Get the attributes of the user with the given username
$query = "SELECT username, name, numFollowers, numFollowing, numTweets FROM Users WHERE username = '$user'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));



// Can also check that there is only one tuple in the result
$tuple = mysqli_fetch_array($result, MYSQL_ASSOC);
 // or die("User $user not found!");

//print "User <b>$user</b> has the following attributes:";

$_SESSION["username"] = $tuple['username'];
$_SESSION["name"] = $tuple['name'];
$_SESSION["numFollowers"] = $tuple['numFollowers'];
$_SESSION["numFollowing"] = $tuple['numFollowing'];
$_SESSION["numTweets"] = $tuple['numTweets'];


if(!isset($_SESSION["username"])) {
header('Location: http://cgi-cspp.cs.uchicago.edu/~bcunningham/cs53001/final.html');
}

echo "Welcome " . $_SESSION["name"] . "!<br>";


// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 

<html>
<p>
<a href="writetweet.php">Tweet</a><br />
<a href="mytweets.php">View My Tweets</a><br />
<a href="followusers.php">Follow Users</a><br />
<a href="logout.php">Logout</a>

</html>
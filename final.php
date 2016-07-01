<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> 
<head>
<title>Twitter Basic Plus</title>
</head>

<body>
<h1>Twitter Basic Plus</h1>


Login
<p>

<form method=get action="home.php">
<b>Enter username:</b><br />
<input type="text" name="user"><br />
<input type="submit" value="Submit">
</form>
<hr>
A form to get all users in a given city and state.  The script that runs \
when you press the <it>Submit</it> button is <code>list_usersfromcity.php</code>.
<p>

<form method=get action="list_usersfromcity.php">
<b>Enter city:</b><br />
<input type="text" name="city"><br />
<form method=get action="list_usersfromcity.php">
<b>Enter state:</b><br />
<input type="text" name="state"><br />

<input type="submit" value="Submit">
</form>

<hr>
A form to get the tweet count in a given city and state.  The script that runs \
when you press the <it>Submit</it> button is <code>count_tweetsbycity.php</code>.
<p>

<form method=get action="count_tweetsbycity.php">
<b>Enter city:</b><br />
<input type="text" name="city"><br />
<form method=get action="count_tweetsbycity.php">
<b>Enter state:</b><br />
<input type="text" name="state"><br />

<input type="submit" value="Submit">
</form>

A link to a php script (<code>list_usersfields.php</code>) that lists all fields in
the Users table:
<p>
<a href="list_usersfields.php">List Users fields!</a>

<hr>
A link to a php script (<code>list_userswithshortesttweets.php</code>) that lists the users with the shortest tweets
<p>
<a href="list_userswithshortesttweets.php">List users with shortest tweets!</a>

<hr>
A link to a php script (<code>list_CAcities20plus.php</code>) that lists the CA cities with at least 20 tweets.
<p>
<a href="list_CAcities20plus.php">CA cities with 20 plus tweets!</a>

<hr>
A form to get the tweet count for names beginning with a certain letter.  The script that runs \
when you press the <it>Submit</it> button is <code>count_tweetsbynameletter.php</code>.
<p>

<form method=get action="count_tweetsbynameletter.php">
<b>Enter first name letter:</b><br />
<input type="text" name="firstletter"><br />

<input type="submit" value="Submit">
</form>


</body>
</html>

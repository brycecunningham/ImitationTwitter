<?php
session_start();
?>

<html>
<h1>Tweet!</h1>
<form method=get action="addtweet.php">                                                                                         
<b>(No more than 140 characters)</b><br />
<textarea name="tweetbody" cols="40" rows="7"></textarea><br /><br />                                                                           
<input type="submit" value="Add Tweet">                                                                            
</form>
</html>



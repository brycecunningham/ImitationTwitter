<?php
session_start();
?>

<html>
<h1>Registration</h1>
<form method=get action="adduser.php">                                                               
<b>Create username:</b><br />                                                                                    
<input type="text" name="username"><br /><br />                                                                           

<form method=get action="adduser.php">                                                               
<b>Enter full name:</b><br />
<input type="text" name="name"><br /><br />                                                                           

<form method=get action="adduser.php">                                                               
<b>Enter city:</b><br />
<input type="text" name="city"><br /><br />                                                                          

<form method=get action="adduser.php">                                                               
<b>Enter state (XX):</b><br />
<input type="text" name="state"><br /><br />                                                                          
                                                                                                                
<input type="submit" value="Register / Return to login">                                                                            
</form>
</html>


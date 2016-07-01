<?php
session_start();
session_unset();
session_destroy();
header('Location: http://cgi-cspp.cs.uchicago.edu/~bcunningham/cs53001/final.html');
?>


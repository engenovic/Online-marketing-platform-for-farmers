
<?php
session_start();
if(session_destroy()) //destroying all sessions
{
	header("Location: ../Home/index.php");
}
?>
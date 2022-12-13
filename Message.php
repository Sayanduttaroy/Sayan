<?php

$host="localhost";
$uname="root";
$database="messi1";
$tablename="message";

$con=mysql_connect($host,$uname) or die("Database could not be connected");
$result=mysql_select_db($database) or die("Database could not be selected");
$query="insert into message(Name,Message)values('$_POST[a]','$_POST[b]')";
$exe=mysql_query($query);
echo "<script>
	alert ('Message Saved');
	</script>";

				
?>


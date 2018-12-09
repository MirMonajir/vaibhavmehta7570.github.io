<html>
<body>
<?php	
$u=$_POST["uname"];
$p=$_POST["pass"];
?>
if($u=="admin" && $p=="1234")
{
	Welcome <?php echo $_POST["uname"]; ?><br>
	Your password is: <?php echo $_POST["pass"];
}
else
{
	echo '<script language="javascript">';
	echo 'alert("Username or password is wrong")';
	echo '</script>';
} ?>

</body>
</html>
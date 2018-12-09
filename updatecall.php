<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manshree";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$update=$_POST['u_idno'];
$sql1="select * from `contact_us` where idno='$update'";
$res1= mysqli_query($conn,$sql1);
if($res1-> num_rows==0)
{
	echo '<script language="javascript">';
         echo 'alert("ID not found")';

        echo '</script>';
        echo '<Script language="javascript">';
        echo 'window.location = "unattended.php" ';
        echo '</script>';
	//die("id not found");
}
$yes="yes";
$sql= " UPDATE `contact_us` SET `call_attended`='$yes' WHERE `idno` = '$update' ";

if (mysqli_query($conn, $sql)) {
        echo '<script language="javascript">';
         echo 'alert("Value Updated Successfully")';

        echo '</script>';
        echo '<Script language="javascript">';
        echo 'window.location = "unattended.php" ';
        echo '</script>';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

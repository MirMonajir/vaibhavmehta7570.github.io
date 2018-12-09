<?php 
$host="localhost";
$user="root";
$password="";
$db="manshree";
 
$conn=mysqli_connect($host,$user,$password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
  
    $sql="select * from users where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    $link_address1 = 'developer.html';
    
    if(mysqli_num_rows($result)==1){
                        
                    header("location:developer.html");
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("You Have Entered Incorrect Username or Password")';
        echo '</script>';
        echo '<Script language="javascript">';
        echo 'window.location = "login.php" ';
        echo '</script>';
      
        exit();
    }
        
}
?>

<html>
<head>
<title>ADMIN LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mainstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="logstyle.css">
<body>
    
     <!--nav bar-->
    <div class="w3-top">
       <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="index.html" class="w3-bar-item w3-button"><b>Manshree</b> Constructions</a>
    <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
         <a href="index.html#projects" class="w3-bar-item w3-button">Projects</a>
         <a href="index.html#about" class="w3-bar-item w3-button">About</a>
         <a href="index.html#contact" class="w3-bar-item w3-button">Contact</a>
         <a href="http://eepurl.com/dLnfG2"class="w3-bar-item w3-button">Careers</a>
         <a href="login.php" class="w3-bar-item w3-button">Login</a>


       </div>
     </div>
    </div>
    <p>
    </p>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
          
        </form>
        
    </div>



</body>
</head>
</html>
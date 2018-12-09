

<html>
<head>
	<title>Unattended Clients</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mainstyle.css">

</head>
<body >
	<!--nav bar-->
	<div class="w3-top">
       <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="developer.html" class="w3-bar-item w3-button"><b>Manshree</b> Constructions</a>
    <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
         <a href="allclients.php" class="w3-bar-item w3-button">All Clients</a>
         <a href="unattended.php" class="w3-bar-item w3-button">Unattended Requests</a>
         <a href="login.php" class="w3-bar-item w3-button">LogOut</a>
         <style>
            .scrollit {
               overflow:scroll;
                height:400px;
            }
            table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
        </style>


       </div>
     </div>
    </div>
    <!--Clients-->
    <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Clients</h3>
    <div style="align:center">
        <?php
            
            $conn=mysqli_connect("localhost","root","","manshree");
            if($conn->connect_error)
            {
                die("conn failed".$conn->connect_error);
            }
            $sql="select * from contact_us order by call_attended";
            $result=$conn->query($sql);
            echo"<br>";
            echo"<div class='scrollit'>";
            echo"<table border='2' align='center'>";
            echo"<tr>";
            echo"<th>ID No.</th><th> Client Name</th><th>Client Email<th>Client Contact no.</th><th>Site Visit Requested</th><th>Interested Property</th><th>Comments</th><th>Call Attended</th></tr>";
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo"<td>".$row["idno"]."</td>";
                    echo"<td>".$row["name"]."</td>";
                    echo"<td>".$row["email"]."</td>";
                    echo"<td>".$row["mobile"]."</td>";
                    echo"<td>".$row["request"]."</td>";
                    echo"<td>".$row["interest"]."</td>";
                    echo"<td>".$row["comment"]."</td>";
                    echo"<td>".$row["call_attended"]."</td></tr>";

                    
                    
                    

                }
            }
            else
            {
                echo"table is empty";

            }
            echo"</table>";
        echo"</div>";


        ?>
    </div>
  </div>
  <form action="updatecall.php" method="post">
        <input class="w3-input w3-section w3-border" type="text" placeholder="                                                                                                        Enter ID No. to update" required name="u_idno">
        <p align="center">
        <button class="w3-button w3-black w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SUBMIT
        </button>
        </p>
   </form>

   <!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by:&nbsp; <a href="https://github.com/vaibhavmehta7570">Vaibhav Mehta & Siddharth Singh</a></p>
</footer>
</body>

</html>
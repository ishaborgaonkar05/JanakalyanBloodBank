<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jankalyan Blood Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
	table  {
  margin-top: 25px;
}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
</style>
  </head>
  <body>
    
  <?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "blood_bank_1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM form_1";
	
	$result = $conn->query($sql);
           
         if ($result->num_rows > 0) {
			echo " <center><table border='1'><tr><th><b>Name</b></th><th><b>Email</b></th><th><b>Message</b></th></tr>";
            while($row = $result->fetch_assoc()) {
				//printf("Id: %s, Title: %s, Author: %s, Date: %d <br />", 
				echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["message"]."</td></tr>";
            }
			echo "</table><center>";
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
      if ($conn->multi_query($sql) === TRUE) {
        echo "<pre>"; print_r($conn->multi_query($sql));
      } 
    

  ?>
    
  </body>
</html>
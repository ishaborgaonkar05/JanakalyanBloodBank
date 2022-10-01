
/*at start* of page/
<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="blood_bank_1";
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$sql="UPDATE user_c SET counts=counts+1 where 1";
mysqli_query($conn,$sql);
$conn->close();

?>
/*dispaly*/
<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="blood_bank_1";
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$sql2="SELECT * FROM user_c";
$result=$conn->query($sql2);
if($result)
{
	while ($row=$result->fetch_assoc()) 
	{
		echo $row["counts"];
	}
}
$conn->close();


?>
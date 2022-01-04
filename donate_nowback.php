<?php
//Connection for database
include 'donate_now_conn.php';
//Select Database
$sql = "SELECT * FROM donate_now_form";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<style> 
table {
  width: 80%;
  text-align: center;
font-family: Arial MT;
   
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: teal;
  color: white;
}
</style>
<body>
<br>
<h1 align="center">Previously Donated Food</h1><br><br>
<table  align="center" style="line-height:25px;">
<tr>
<th>ID</th>
<th>Username</th>
<th>E-mail</th>
<th>Type of food</th>
<th>Date of cooking</th>
<th>Time of cooking</th>
<th>Quantity</th>
<th>Location</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
<td><?php echo $row['id']; ?> </td>
<td><?php echo $row['username']; ?> </td>
<td><?php echo $row['email']; ?> </td>
<td><?php echo $row['typeoffood']; ?> </td>
<td><?php echo $row['dateofcooking']; ?> </td>
<td><?php echo $row['timeofcooking']; ?> </td>
<td><?php echo $row['quantity']; ?> </td>
<td><?php echo $row['location']; ?> </td>
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>
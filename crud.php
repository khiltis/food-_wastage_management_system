<?php
//Connection for database
include 'donate_now_conn.php';
//Select Database
$sql = "SELECT * FROM donate_now_form";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="crudstyle.css">
</head>
<body></br>
<h1 align="center">Donation Request</h1></br>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>ID</th>
<th>Username</th>
<th>E-mail</th>
<th>Type of food</th>
<th>Date of cooking</th>
<th>Time of cooking</th>
<th>Quantity</th>
<th>Location</th>
<th>Action</th>
<th>Action</th>
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
<td>
<button type="button" onclick="alert('Food Donation Request Accepted')" class="accept_btn">Accept</button>
</td>
<td>
<a href="crud_server.php?del=<?php echo $row['id']; ?>" class="decline_btn">Decline</a>
</td>
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
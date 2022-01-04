<?php
//Connection for database
include 'agent_table_conn.php';
//Select Database
$sql = "SELECT * FROM agent_donation";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
<style> 
table {
  width: 80%;
  text-align: center;
}

tr:nth-child(even){background-color: #f2f2f2
}

th {
  background-color: teal;
  color: white;
}
</style>
</head>
<body>
<br>
<h1 align="center">Food Collecting Details</h1>
<br>
<br>
<table  align="center" style="line-height:25px;">
<tr>
<th>Id</th>
<th>Agent Name</th>
<th>E-mail</th>
<th>Donar's Name</th>
<th>Date of collecting food</th>
<th>Time of collecting food</th>
<th>Orphanage Name</th>
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
<td><?php echo $row['donarname']; ?> </td>
<td><?php echo $row['dateofcollectingfood']; ?> </td>
<td><?php echo $row['timeofcollectingfood']; ?> </td>
<td><?php echo $row['orphanagename']; ?> </td>
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
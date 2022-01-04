<?php
//Connection for database
include 'agent_table_conn.php';
//Select Database
$sql = "SELECT * FROM agent_table";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
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
</head>
<body>
<br>
<h1 align="center">Agent Details</h1>
<br>
<br>
<table  align="center" style="line-height:25px;">
<tr>
<th>ID</th>
<th>Username</th>
<th>E-mail</th>
<th>Password</th>
<th>Age</th>
<th>Birthdate</th>
<th>Phone no.</th>
<th>Address</th>
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
<td><?php echo $row['password']; ?> </td>
<td><?php echo $row['age']; ?> </td>
<td><?php echo $row['birth']; ?> </td>
<td><?php echo $row['phone']; ?> </td>
<td><?php echo $row['address']; ?> </td>
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
<html>
<head>
	<title> Display </title>
</head>
<body>
	<table border="2">
		<tr>
			<th>Fname</th>
			<th>Lname</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
		</tr>

<?php
$conn=new mysqli('localhost','root','','test');
if($conn)
{
	$data=mysqli_query($conn,"SELECT * FROM register");
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		while($result=mysqli_fetch_assoc($data))
		{
			echo "
			<tr>
			<td>".$result['Fname']."</td>
			<td>".$result['Lname']."</td>
			<td>".$result['Username']."</td>
			<td>".$result['Email']."</td>
			<td>".$result['Password']."</td>
			</tr>
			";

		}
	}
	else
	{
		echo "no records found";
	}

}
else
{
	echo "connection failed".mysqli_connect_error();
}
$conn->close();

?>
</table>
</body>
</html>
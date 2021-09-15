
<?php 
 $connection = mysqli_connect('localhost', 'root', '','sdf_database');

	// 2. Test if the connection works
	if($connection === false){
		die("An error has occured: " . mysqli_connect_error());
	}
	$result = mysqli_query($connection,"SELECT * FROM applicant");
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>applicants</title>
		<link rel="stylesheet" type="text/css" href="table.css">
		<link rel="stylesheet" type="text/css" href="ipr.css">
	</head>
	<body class="appl">
	<?php
if (mysqli_num_rows($result) > 0) {
?>
<p>List of applicants</p>
  <table>
  
  <tr>
    <td>First name</td>
    <td>Last Name</td>
    <td>Gender</td>
    <td>Date of birth</td>
    <td>Highest academic level</td>
    <td>District</td>
    <td>Sector</td>
    <td>Cell</td>
    <td>Email</td>
    <td>Option</td>
    <td>Application Number</td>
    
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["date_of_birth"]; ?></td>
    <td><?php echo $row["highest_academic_level"]; ?></td>
    <td><?php echo $row["district"]; ?></td>
    <td><?php echo $row["sector"]; ?></td>
    <td><?php echo $row["cell"]; ?></td>
    <td><?php echo $row["amail"]; ?></td>
<td><?php echo $row["learning_option_id"]; ?></td>
<td><?php echo $row["application_number"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

	</body>
	</html>
<?php 
//1 step. check if form is submitted
if (isset($_post['submit'])) {
# 2 step.code to create new connection to server and db
$connection=mysql_connect('localhost','root','','sdf_database');

//3 step. test if connection works
if ($connection===false) {
	
	die("an error has occured:".mysql_connect_error());
}
}
//3 step.create variable to capture imformation from form
$first_name=$_POST['first_name']
$last_name=$_POST['last_name']
$gender=$_POST['gender']
$date_of_birth=$_POST['date_of_birth']
$highest_academic_level=$_POST['highest_academic_level']

$province=$_POST['province']
$district=$_POST['district']
$sector=$_POST['sector']
$celle=$_POST['celle']
$learning_option=$_POST['learning_option']







 ?>








>
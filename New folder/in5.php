<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dopt1');

$user=$_POST['user'];
$f_name=$_POST['f_name'];
$m_name=$_POST['m_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];
$pa=$_POST['pa'];
$ph=$_POST['ph'];
$em=$_POST['em'];
$fn=$_POST['fn'];
$fo=$_POST['fo'];
$fc=$_POST['fc'];
$fm=$_POST['fm'];
$mn=$_POST['mn'];
$mo=$_POST['mo'];
$rc=$_POST['rc'];
$s="INSERT INTO `personal_details_mdb`(`user_id`, `first_name`, `middle_name`, `last_name`, `gender`, `DOB`, `blood_group`, `permanent_address`, `phone_no`, `email_id`, `father_name`, `father_occupation`, `father_contact_no`, `father_email_id`, `mother_name`, `mother_occupation`, `reservation_on_category`) VALUES ('$user','$f_name','$m_name','$l_name','$gender','$dob','$bg','$pa','$ph','$em','$fn','$fo','$fc','$fm','$mn','$mo','$rc')";

$result = mysqli_query($con, $s);

if($result)
	$msg="New user added";
else
	$msg="User already exists";
header('Location: Personaldetails.php?msg='.$msg);
?>

<?php

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_kontak');

// get the post records

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$pesan = $_POST['pesan'];

// database insert SQL code
$query = "INSERT INTO contact(nama, email, no_hp, pesan)VALUES('$nama', '$email','$no_hp','$pesan')";

// insert in database 
$rs = mysqli_query($con, $query);
if($rs)
{
	echo "Contact Records Inserted";
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
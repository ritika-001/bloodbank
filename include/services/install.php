<?php 
	require 'database.php';
	$sql="create table if not exists Signup(id int primary key ,firstname varchar(60) not null,middlename varchar(50) not null,lastname varchar(50),username varchar(50) not null unique key,Email varchar(40) not null,address varchar(255) not null,phone varchar(15) not null,birthdate date,password varchar(50) not null);
		create table if not exists admin (
			id varchar(20) primary key,
			name varchar(20),
			password varchar(30)
		);
		create table if not exists RequestBlood(FirstName varchar(30) not null,LastName varchar(30) not null,dob date,Phone varchar(15) not null unique key,Gender varchar(9) not null,Notification varchar(15) not null,age varchar(3) not null,Bloodgroup varchar(5) not null,city varcar(30) not null,address varchar(50) not null,message varchar(100) not null);
		create table if not exists ContactUs(FirstName varchar(30),LatName varchar(30),Email varchar(20) not null unique key,phonenum varchar(15) not null,Message not null); 
		insert into admin values ('ritika','ritika','123');
	";
	if(!mysqli_multi_query($db,$sql)){
		echo "error ".mysqli_error($db);
	}else
		echo "success";

?>

<?php

	global $con;

	$con = mysqli_connect('localhost','root','','prak');

	if(!$con)
	{
		echo 'Tidak dapat terhubung ke database';
		die();
	}
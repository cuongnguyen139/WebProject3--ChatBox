<?php
//Connect to MySQL
$con = mysqli_connect("localhost","cuontpfq_cuong","cuong1991","cuontpfq_chatbox");

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
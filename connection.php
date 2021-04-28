<?php
//Set up the database access credentials
$hostname = 'stu-db.aet.leedsbeckett.ac.uk'; 
$username = 'c3541545'; //your standard uni id
$password = 'MyDB70700580';  // the password found on the W: drive
$databaseName = 'c3541545'; //the name of the db you are using on phpMyAdmin
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

?>

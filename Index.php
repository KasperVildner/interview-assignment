<?php
//Connection to database
$db = new mysqli('localhost', 'root', '', 'cegoopgave');

//Connection error massage
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

//Get all users from database
$sql = "SELECT * FROM users";

//Connection error massage
if(!$result = $db->query($sql)){
die('There was an error running the query [' . $db->error . ']');
}

//Write all user into file
while($row = $result->fetch_assoc()){
$id = $row['id']." ";
$firstName = $row['firstName']." ";
$lastName = $row['lastName']." ";
$email = $row['email'];
file_put_contents("C:\wamp64\www\InterviewAssignmentKasper\UserFile", $id, FILE_APPEND);
file_put_contents("C:\wamp64\www\InterviewAssignmentKasper\UserFile", $firstName, FILE_APPEND);
file_put_contents("C:\wamp64\www\InterviewAssignmentKasper\UserFile", $lastName, FILE_APPEND);
file_put_contents("C:\wamp64\www\InterviewAssignmentKasper\UserFile", $email . PHP_EOL, FILE_APPEND);
}

//Check if file is empty
if (filesize('C:\wamp64\www\InterviewAssignmentKasper\UserFile') == 0){
    echo "The file is empty";
}
else
{
    echo "File with users have been created and users are remove from database";
    $dropSql = "DROP TABLE users";
    $sqlQuery = mysqli_query($db, $dropSql);
    if(! $sqlQuery ) {
        die('Could not delete table: ' . mysql_error());
     }
   
}
?>
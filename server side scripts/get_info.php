<?php
 
 $user_id = $_GET['user_id'];
 $password = $_GET['password'];
 $fromDate = $_GET['date'];
 $toDate = $_GET['toDate'];
 $latest = $_GET['latest'];
 
 if($user_id == ''){
 echo 'please provide user id';
 }else{
 require_once('dbConnect.php');

  if($latest == true)
 {
 	$info_sql = "SELECT * FROM mytable WHERE dateTime = '2022-05-27'";
 }
 else
 {
 	$info_sql = "SELECT * FROM mytable WHERE User_ID='$user_id' and dateTime between '$fromDate' and '$toDate'";
 }

 $posts = array();

 $info_res = $con->query($info_sql);

if($info_res->num_rows > 0)
{
	while ($row1 = $info_res->fetch_assoc()) {
   	$posts[] = $row1;
}
  
    echo json_encode($posts);
} else {
	$posts = array('status' => 'fail', 'info' => null);
        echo json_encode($posts);
}
$con->close();
 }				
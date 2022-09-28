<?php
 
 $user_id = $_GET['user_id'];

 if($user_id== ''){
 echo 'please fill all values';
 }else{
 require_once('dbConnect.php');
 $info_sql = "SELECT * FROM mytable WHERE User_ID='$user_id'";
 $posts = array();

 $info_res = $con->query($info_sql);

        if($info_res->num_rows > 0)
       	{
       		while ($row1 = $info_res->fetch_assoc()) {
        	$posts[] = $row1;
        }
 
    echo json_encode($posts);
} else {
	echo json_encode($posts);
}
$con->close();
 }				
<?php 

// sanitize input
$the_code = filter_var($_POST['invite_code'], FILTER_SANITIZE_MAGIC_QUOTES);

//connect to database
$con = mysql_connect("127.0.0.1", "comweb", "UWabtJQjp6uC3YOg") or  
    die("Could not connect: " . mysql_error());  

// select the database in the staging site  
mysql_select_db("snapshot_comweb");   

// the query
$result = mysql_query("SELECT * FROM wp_invites WHERE invite_code = '$the_code'");  

// Get invite code from database and -
// check if code entered exists in database
if(mysql_num_rows($result)>0) {

	//if code exists in the database
	while ($row = mysql_fetch_array($result)) {  
		$response = array('success'=>true, 'first_name'=>$row['first_name']);
		echo json_encode($response);
	} 

} else {
	// if code does not exists in the database
	$response = array('success'=>false, 'err_message'=>'Invalid code!' );
	echo json_encode( $response );
}

//close connection
mysql_close($con);

?>
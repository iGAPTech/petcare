<?php
    include("../../connection.php");

    $usertype = $_POST['usertype'];
    $sql = "SELECT * FROM users WHERE user_type = '$usertype'";
    $result = mysqli_query($conn, $sql);
    $dataarray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $tarray = array();
		$tarray["status"] = 'success';
		$tarray = $row;		
		array_push($dataarray, $tarray);
    }
    header('Content-Type: application/json');
	echo json_encode(array("data"=>$dataarray));
    
?>
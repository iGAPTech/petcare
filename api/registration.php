<?php
    include("../connection.php");   


    if(isset($_POST['name']))
    {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];
    $address = $_POST["address"];
    $city = $_POST["city"];

    if($user_type == 'as an User')
    $user_type = 'user';
    if($user_type == 'as a Shelter')
    $user_type= 'shelter';

    date_default_timezone_set('Asia/Kolkata');
    $now = date('Y-m-d H:i:s');
    
        $sql = "INSERT INTO users(name,  email, mobileno, password,user_type,address, city, createdon)";
        $sql .=" VALUES ('$name' , '$email','$mobileno', '$password', '$user_type', '$address','$city', '$now')";
        
        
        $result  = mysqli_query($conn, $sql); 
        $tarray = array();
        if(!$result)
        {
            $tarray["status"] = 'failed';
            array_push($tarray);
        }
        else
        {
            $tarray["status"] = 'success';
            array_push($tarray);
        }
   
    }
    else{
        $tarray["status"] = 'failed';
            array_push($tarray);
    }
    
    
    header('Content-Type: application/json');
	echo json_encode($tarray);
    
?>
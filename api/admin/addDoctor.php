<?php
    include("../../connection.php");   

    if(isset($_POST['name']))
    {
        $name = $_POST["name"];
        $speciality = $_POST["speciality"];
        $mobileno = $_POST["mobileno"];
        $city = $_POST["city"];

        // Prepare the INSERT query
        $sql = "INSERT INTO doctors(name, speciality, mobileno, city) 
                VALUES ('$name', '$speciality', '$mobileno', '$city')";
        
        $result = mysqli_query($conn, $sql); 
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
    else
    {
        $tarray["status"] = 'failed';
        array_push($tarray);
    }
    
    header('Content-Type: application/json');
    echo json_encode($tarray);
?>

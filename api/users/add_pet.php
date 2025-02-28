<?php
    include("../../connection.php");   

    "id": "1",
      "name": "Buddy",
      "species": "dog",
      "breed": "Labrador Retriever",
      "age": "3",
      "gender": "male",
      "description": "Friendly and energetic",
      "imagename": "https://example.com/dog1.jpg",
      "health_status": "Healthy",
      "location": "Mumbai, India",
      "added_by": "1",
      "status": "available",
      "created_at": "2025-01-30 00:23:39"


    if(isset($_POST['name']))
    {
    $name = $_POST["name"];
    $species = $_POST["species"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $description = $_POST["description"];
    $imagename = $_POST["imagename"];
    $health_status = $_POST["health_status"];
    $status = $_POST["status"];
    $location = $_POST["location"];

    
    
        $sql = "INSERT INTO stations(name,  location, city, latitude, longitude)";
        $sql .=" VALUES ('$name' , '$location','$city', '$latitude', '$longitude')";
        
        
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
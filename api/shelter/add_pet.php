<?php
include("../../connection.php");   

if(isset($_POST['name'])) {
    $name         = $_POST["name"];
    $species      = $_POST["species"];
    $breed        = $_POST["breed"];
    $age          = $_POST["age"];
    $gender       = $_POST["gender"];
    $description  = $_POST["description"];
    $imagename    = $_POST["imagename"];
    $healthStatus = $_POST["health_status"];
    $location     = $_POST["location"];
    $addedBy      = $_POST["added_by"];
    $status       = $_POST["status"];

    date_default_timezone_set('Asia/Kolkata');
    $now = date('Y-m-d H:i:s');
    
    // SQL query to insert pet details
    $sql = "INSERT INTO pets(name, species, breed, age, gender, description, imagename, health_status, location, added_by, status, created_at)";
    $sql .= " VALUES ('$name', '$species', '$breed', '$age', '$gender', '$description', '$imagename', '$healthStatus', '$location', '$addedBy', '$status', '$now')";

    $result = mysqli_query($conn, $sql); 
    $response = array();
    
    if(!$result) {
        $response["status"] = 'failed';
    } else {
        $response["status"] = 'success';
    }
} else {
    $response["status"] = 'failed';
}

header('Content-Type: application/json');
echo json_encode($response);
?>

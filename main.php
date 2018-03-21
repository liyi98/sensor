<?php
include 'Connection.php';
$db = new Connection();
$con = $db->connect();

$response = array();

switch ($_GET['view']) {


    case 'get_activity':
        $sql=  mysqli_query($con,"SELECT * FROM activity");
        while($activity =mysqli_fetch_assoc($sql)){
            array_push($response, $activity);
        }
        break;






    default:
        $response = array();
        $response['success'] = false;



}

echo json_encode($response);


?>
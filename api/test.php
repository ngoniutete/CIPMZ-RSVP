<?php
/**
 * Created by PhpStorm.
 * User: Ngonidzashe Utete
 * Date: 12/13/2018
 * Time: 9:09 AM
 */
$result = array();

$sql = "SELECT * FROM events";

$con = mysqli_connect("localhost","root","","cipmz_events");
$query_result = mysqli_query($con,$sql);

if($query_result){
    while ($row = $query_result->fetch_object()){
        array_push($result,$row);
    }

    echo json_encode($result);
}
else{
    array_push($result,"Failed");
    echo json_encode($result);
}
$con->close();
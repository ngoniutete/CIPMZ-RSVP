<?php
/**
 * Created by PhpStorm.
 * User: Ngonidzashe Utete
 * Date: 1/5/2019
 * Time: 1:55 PM
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
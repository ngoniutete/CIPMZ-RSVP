<?php
/**
 * Created by PhpStorm.
 * User: Ngonidzashe Utete
 * Date: 12/13/2018
 * Time: 8:38 AM *
 */

$result = array();

$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$status = "Open";

$sql = "INSERT INTO events (event_name,event_date,status) VALUES('$event_name','$event_date','$status')";

$con = mysqli_connect("localhost","root","","cipmz_events");
$query_result = mysqli_query($con,$sql);

if($query_result){
    array_push($result,"Registration Successful");
    echo json_encode($result);
}else{
    array_push($result,"Registration Failed");
    echo json_encode($result);
};
$con->close();

function reg_event(){
    $result = array();

    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $status = "Open";

    $sql = "INSERT INTO events (event_name,event_date,status) VALUES('$event_name','$event_date','$status')";

    $con = mysqli_connect("localhost","root","","cipmz_events");
    $query_result = mysqli_query($con,$sql);

    if($query_result){
        array_push($result,"Registration Successful");
        echo json_encode($result);
    }else{
        array_push($result,"Registration Failed");
        echo json_encode($result);
    };
    $con->close();
}

function get_events(){
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
}

function update_event_status(){
    $result = array();
    $event_status = $_POST['event_status'];
    $event_id = $_POST['event_id'];

    $sql = "UPDATE events SET (status='$event_status') WHERE id='$event_id'";

    $con = mysqli_connect("localhost","root","","cipmz_events");
    $query_result = mysqli_query($con,$sql);

    if($query_result){
        array_push($result,"success");
        echo json_encode($result);
    }else{
        array_push($result,"failed");
        echo json_encode($result);
    };
    $con->close();
}

function update_event_date(){
    $result = array();
    $event_date = $_POST['event_date'];
    $event_id = $_POST['event_id'];

    $sql = "UPDATE events SET (event_date='$event_date') WHERE id='$event_id'";

    $con = mysqli_connect("localhost","root","","cipmz_events");
    $query_result = mysqli_query($con,$sql);

    if($query_result){
        array_push($result,"success");
        echo json_encode($result);
    }else{
        array_push($result,"failed");
        echo json_encode($result);
    };
    $con->close();
}

function update_event_name(){
    $result = array();
    $event_name = $_POST['event_name'];
    $event_id = $_POST['event_id'];

    $sql = "UPDATE events SET (event_name='$event_name') WHERE id='$event_id'";

    $con = mysqli_connect("localhost","root","","cipmz_events");
    $query_result = mysqli_query($con,$sql);

    if($query_result){
        array_push($result,"success");
        echo json_encode($result);
    }else{
        array_push($result,"failed");
        echo json_encode($result);
    };
    $con->close();
}

function delete_event(){
    $result = array();
    $event_id = $_POST['event_id'];

    $sql = "DELETE FROM events WHERE id='$event_id'";

    $con = mysqli_connect("localhost","root","","cipmz_events");
    $query_result = mysqli_query($con,$sql);

    if($query_result){
        array_push($result,"success");
        echo json_encode($result);
    }else{
        array_push($result,"failed");
        echo json_encode($result);
    };
    $con->close();
}
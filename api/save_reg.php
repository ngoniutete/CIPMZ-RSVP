<?php
/**
 * Created by PhpStorm.
 * User: Ngonidzashe Utete
 * Date: 12/13/2018
 * Time: 8:38 AM *
 */

$result = array();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$designation = $_POST['designation'];
$comp_name = $_POST['comp_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO registration (first_name,last_name,designation,comp_name,phone,email,address) VALUES('$first_name','$last_name',
'$designation','$comp_name','$phone','$email','$address')";

$con = mysqli_connect("localhost","root","","cipmz_events");
$query_result = mysqli_query($con,$sql);

if($query_result){
    array_push($result,"success");
    echo json_encode($result);
}else{
    array_push($result,"failed");
    echo json_encode($result);
};
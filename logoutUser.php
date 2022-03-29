<?php
session_start();
require_once 'classes/User.php';

$user = new User();
$user->logoutUser();


if(empty($_SESSION)){
   echo json_encode(array('result' => 'Success'));
}else{
   echo json_encode(array('result' => 'Failure'));   
}

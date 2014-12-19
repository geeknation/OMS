<?php

require_once("../entel_ltd/EntelAuth.php");

$AppAuth=new EntelAuth("index.php","dashboard.php");
$returnData=array();
if(empty($_POST) or count($_POST)<2){
	$returnData['message']="Please ensure all fields are filled";
	$returnData['action']="user_login";
	$returnData['login']='false';
	echo json_encode($returnData);
}else{
	$AppAuth->login($_POST['username'], $_POST['password']);
}


?>
<?php
global $db;
require_once "../entel_ltd/EntelAuth.php";
$auth=new EntelAuth("login.php","index.php");

if(isset($_GET['req'])){
	if($_GET['req']=="get-order-items"){
		getOrderItems();
	}
	if($_GET['req']=="fetch-my-orders"){
		fetchUserOderItems();
	}
}
if(isset($_POST['req'])){
	if($_POST['req']=="save-order-item"){
		saveOrderItems();
	}if($_POST['req']=="login"){
		$auth->loginQuery="SELECT user_id,username,password FROM staff WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
		$auth->login($_POST['username'], $_POST['password'],TRUE);
	}
}


function getOrderItems(){
	$db= new PDO("mysql:host=localhost;dbname=oms", "root", "");
	$stmt=$db->prepare("SELECT * FROM products");
	$stmt->execute();
	echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}

function saveOrderItems(){
	if(!empty($_POST)){
		$_POST['date']=time();
		$_POST['user_id']=rand(1,3000);
		unset($_POST['req']);
		$db= new PDO("mysql:host=localhost;dbname=oms", "root", "");
		$stmt=$db->prepare("INSERT INTO orders(order_number,item_id,due_date,quantity,date,user_id)
			VALUES(:ordernumber,:product,:orderexpdate,:quantity,:date,:user_id)
		");
		$stmt->execute($_POST);
		if($stmt->rowCount()==1){
			echo json_encode(array("msg"=>"item added to order","success"=>1,"action"=>"add items to order"));
		}else{
			echo json_encode(array("msg"=>"error adding items to order","success"=>0,"action"=>"add items to order"));
		}
	}
}
function fetchUserOderItems(){
	$db= new PDO("mysql:host=localhost;dbname=oms", "root", "");
	$stmt=$db->prepare("SELECT * FROM orders");
	$stmt->execute();
	echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
	
}

function populate() {
	
	for ($i = 1; $i <= 1000; $i++) {

		$stmt = $db -> prepare("
		INSERT INTO products(item_id,item_name,price)
		 VALUES(:id,:product,:price);
	");
		$stmt -> execute(array("id" => uniqid(), "product" => "Product-{$i}", "price" => rand()));
	}
}
?>
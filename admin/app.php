<?php
require_once ("../libs/uuid/Uuid.php");
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
$db = new PDO("mysql:host=localhost;dbname=oms", "root", "");
if (isset($_POST)) {
	if ($_POST['req'] == "create-staff-user") {
		$uuid = Uuid::uuid4();
		
		unset($_POST['req']);
		
		$user_type = '';
		if ($_POST['employee_role'] == "Administrator") {
			$user_type = 100;
		} else if ($_POST['employee_role'] == "Operator") {
			$user_type == 50;
		} else {
			$user_type = 10;
		}
		$userID=$uuid->toString();
		$_POST['enrolled'] = TRUE;
		$_POST['created'] = time();
		$_POST['user_id']=$userID;
		$_POST['user_type']=$user_type;
		$_POST['active']=1;
		$stmt_user = $db -> prepare("INSERT INTO staff(user_id,first_name,other_names,phone_number,email_address,id_number,enrolled,created,role,residence,username,password,user_type,active)
				   					 VALUES(:user_id,:firstname,:other_names,:phonenumber,:email,:idnumber,:enrolled,:created,:employee_role,:residence,:username,:password,:user_type,:active)");
	
						
				$stmt_user -> execute($_POST);
				
				//$stmt_auth -> execute(array("username" => $username, "password" => $password, "user_id" => $userID, "role" =>$_POST['employee_role']));
				
				if($stmt_user->rowCount()==1){
					echo json_encode(array("action"=>"create-staff-user","success"=>"TRUE","message"=>"user created successfully"));
				}else{
					echo json_encode(array("action"=>"create-staff-user","success"=>"FALSE","message"=>"error creating user"));
				}
		

	}
}
if(isset($_GET)){
	if($_GET['req']=="fetch-all-users"){
		echo json_encode($_GET);
		$stmt=$db->prepare("SELECT * FROM staff");
		$stmt->execute();
		echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
	}
	
}
echo json_encode($_GET);
?>
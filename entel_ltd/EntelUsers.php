<?php


class EntelUser {
	public $conn;
	public function __construct(){
		$db = new EntelDB("bigoak_partyon", "bigoak_partyon", "oppositeihub14");
		$this->conn=$db->conn;
	}
	
	private $empty = array();
	public function createUser($fieldvalues) {
		array_walk($fieldvalues, "User::checkNull");
		if (count($this -> empty) >= 1) {
			echo json_encode($this -> empty);
		} else {
			static $conn;
			$conn = $db -> conn;
			$userid = $user -> generateUserCode();
			$imagepath = "";
			$query = "INSERT INTO users(userId,firstName,lastName,email,location,birthday,username,auth,image) VALUES(?,?,?,?,?,?,?,?,?)";
			$arrayvalues = array_values($fieldvalues);
			$dbvals = array_merge((array)$userid, $arrayvalues, (array)$imagepath);
			$stmt = $conn -> prepare($query);
			$stmt -> execute($dbvals);
			$feedback;
			if ($stmt -> rowCount() == 1) {
				$feedback = array("action" => "create-account", "message" => "account created");
				echo json_encode($feedback);
			} else {
				$feedback = array("action" => "create-account", "message" => "error creating account");
				echo json_encode($feedback);
			}
		}

	}

	function generateUserCode($length = 10) {
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

	function genRandAuth() {
		$length = 7;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

}

?>

<?php
include 'connect_db.php';

	 // Check whether username or password is set from android
if (isset($_POST)) {
		  // Innitialize Variable
    $email = $_POST['email'];
    $password = encrypt($_POST["password"], 'e');
		$data = [];
    $sql = "SELECT * FROM user_data WHERE email = '$email' AND password = '$password' AND status = 'active'";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1){
			while ($row = $result->fetch_assoc()) {
				session_start();
				$_SESSION["userId"] = $row["userId"];
				$data["result"] = "1";
        $data["date"] = date("d/m/Y");
				echo json_encode($data);
			}
    }
    else {
        $data["result"] = "0";
				$data["message"] = "invalid email or password";
        $data["date"] = date("d/m/Y");
				echo json_encode($data);
    }
}
?>

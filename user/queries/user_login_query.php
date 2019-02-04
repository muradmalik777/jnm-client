<?php
include 'connect_db.php';

	 // Check whether username or password is set from android
if (isset($_POST)) {
		  // Innitialize Variable
    $email = $_POST['email'];
    $password = encrypt($_POST["password"], 'e');
		$data = [];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status = 1";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1){
			while ($row = $result->fetch_assoc()) {
				session_start();
				$_SESSION["user_id"] = $row["id"];
				$data["code"] = 1;
				echo json_encode($data);
			}
    }
    else {
        $data["code"] = 0;
				$data["message"] = "invalid email or password";
				echo json_encode($data);
    }
}
?>

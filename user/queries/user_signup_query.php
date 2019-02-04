<?php
include 'connect_db.php';

if (isset($_POST)) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = encrypt($_POST["password"], 'e');
    $status = 1;
    $created_at = date("Y-m-d H:i:s");
    $data = [];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        $data["code"] = 0;
        $data["message"] = "Email Already Exists";
        echo json_encode($data);
    }
    else {
        $sql2 ="INSERT INTO users (first_name, last_name, email, password, status, created_at) VALUES ('$first_name', '$last_name', '$email', '$password', '$status', '$created_at')";
        if ($conn->query($sql2) === TRUE) {
          $data["code"] = 1;
          $data["message"] = "New User Created Successfully";
          echo json_encode($data);
        }
    }
}
$conn->close();
?>

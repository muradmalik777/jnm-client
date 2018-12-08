<?php
include 'connect_db.php';

if (isset($_POST)) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = encrypt($_POST["password"], 'e');
    $id = md5(date("d/m/Y H:i:sa"));
    $currentDate = date("d/m/Y");
    $status = "active";
    $data = [];
    $sql = "SELECT * FROM user_data WHERE email = '$email'";
    $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        $data["result"] = "0";
        $data["message"] = "Email Already Exists";
        $data["date"] = date("d/m/Y H:i:sa");
        echo json_encode($data);
    }
    else {
        $sql2 ="INSERT INTO user_data (userId, name, email, password, createdAt, status) VALUES ('$id', '$fullname', '$email', '$password', '$currentDate', '$status')";
        if ($conn->query($sql2) === TRUE) {
          $data["result"] = "1";
          $data["message"] = "New User Created Successfully";
          $data["date"] = date("d/m/Y H:i:sa");
          echo json_encode($data);

        }
    }
}
$conn->close();
?>

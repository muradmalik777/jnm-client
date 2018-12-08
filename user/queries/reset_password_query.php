<?php
include 'connect_db.php';

if (isset($_POST["userId"])) {
    $prevPassword = encrypt($_POST["prev_password"], 'e');
    $newPassword = encrypt($_POST["new_password"], 'e');
    $id = $_POST["userId"];
    $data = [];
    $sql = "SELECT * FROM user_data WHERE userId = '$id' ANd password ='$prevPassword'";
    $result =$conn->query($sql);
    if ($result->num_rows == 0) {
        $data["result"] = "0";
        $data["message"] = "incorrect previous password";
        echo json_encode($data);
    }
    else {
        $sql2 ="UPDATE user_data SET password='$newPassword' WHERE userId = '$id'";
        if ($conn->query($sql2) === TRUE) {
          $data["result"] = "1";
          $data["message"] = "your password has been updated";
          echo json_encode($data);
        }
    }
}
$conn->close();
?>

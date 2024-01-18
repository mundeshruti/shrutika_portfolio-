<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "portfolio";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$message =$_POST['message'];




$sql="INSERT INTO contact (name,email,address,phone,message) VALUES ('".$name."','".$email."', '".$address."','".$phone."','".$message."')";

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

mysqli_close($conn);
?>
<script> 
alert("message send sucessfully.");
window.location.href = "index.html";
</script>
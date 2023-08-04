<?php
?>

<!DOCTYPE html>
<html>

<head>
    <div>
        <p class="head" id="title" style="color:#0962a1; font-size: large ">LIST OF EMPLOYEES</p>
        <p class="head" id="add" style="background: #158140; color: #ffffff ">
            + Add New Employee
        </p>
    </div>
    <div>

    </div>
    <style>

    </style>


</head>
<!---->
<?php
// Thực hiện kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "21022001";
$dbname = "XProject";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

//// Câu lệnh SQL để tạo bảng
//$sql = "CREATE TABLE employees (
//    id INT PRIMARY KEY,
//    name VARCHAR(255),
//    address VARCHAR(255),
//    salary DECIMAL(10, 2),
//    action VARCHAR(255)
//)";
//
//// Thực thi câu lệnh tạo bảng
//if ($conn->query($sql) === TRUE) {
//    echo "Tạo bảng thành công";
//} else {
//    echo "Lỗi trong quá trình tạo bảng: " . $conn->error;
//}

//// Đóng kết nối
//$conn->close();
?>


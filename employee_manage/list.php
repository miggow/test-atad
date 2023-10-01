<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách Nhân viên</title>
    <link rel="stylesheet" href="public/boostrap.min.css">
</head>
<body>
    <div class="container mt-5">
       <div class="row">
            <div class="col">
                <h1>Danh sách Nhân viên</h1>
            </div>
            <div class="col-auto">
                <a href="update.php" class="btn btn-primary">Tạo nhân viên</a>
            </div>
        </div>
        <hr>
        <?php
            include('message.php');
            include_once 'config/database.php';
            include_once 'Nhanvien.php';

            $database = new Database();
            $db = $database->getConnection();

            $nhanvien = new Nhanvien($db);
            $employees = $nhanvien->getAllEmployee();
        ?>
            <?php 
                if(!empty($employees)){
                    echo "<table class='table'>
                                <thead>
                                    <th>Mã số nhân viên</th>
                                    <th>Họ tên</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Giới thiệu</th>
                                    <th>Ngày vào làm</th>
                                    <th>Thao tác</th>
                                </thead>";
                    foreach($employees as $employee){
                        $date = date('d/m/Y', strtotime($employee->ngay_vao_lam));
                        echo "<tr>
                                    <td>{$employee->msnv}</td>
                                    <td>{$employee->ho_ten}</td>
                                    <td>{$employee->dien_thoai}</td>
                                    <td>{$employee->email}</td>
                                    <td>{$employee->gioi_thieu}</td>
                                    <td>{$date}</td>
                                    <td><a class='btn btn-warning' href='update.php?id={$employee->id}'>Sửa</a></td>
                                </tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "<h5>Không có nhân viên trong danh sách nhân viên</h5>";
                }
            ?>
            
    </div>

</body>
</html>


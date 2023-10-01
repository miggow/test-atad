<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>tạo/cập nhật nhân viên</title>
    <link rel="stylesheet" href="public/boostrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php 
            include('Nhanvien.php');
            include('config/database.php');
        ?>
        
        <?php 
        if (!isset($_GET['id'])) {
            include('create.php');
            $database = new Database();
            $conn = $database->getConnection();

            
            if(isset($_POST['store_employee'])){
                $nhanvien = new Nhanvien($conn);
                $nhanvien->msnv = $_POST['msnv'];
                $nhanvien->ho_ten = $_POST['ho_ten'];
                $nhanvien->dien_thoai = $_POST['dien_thoai'];
                $nhanvien->email = $_POST['email'];
                $nhanvien->gioi_thieu = $_POST['gioi_thieu'];
                $nhanvien->ngay_vao_lam = $_POST['ngay_vao_lam'];

                try {
                    if ($nhanvien->create()) {
                        $_SESSION['message'] = "Tạo nhân viên thành công";
                        header("location: list.php");
                    } else {
                        throw new Exception("Lỗi: " . $conn->error);
                    }
                } catch (Exception $e) {
                    $_SESSION['error_message'] = $e->getMessage();
                    header("location: list.php");
                }
            }
        }
        ?>
        <?php 
            if (isset($_GET['id'])) {
                $database = new Database();
                $conn = $database->getConnection();

                $nhanvien = new Nhanvien($conn);

                $employee = $nhanvien->findEmployee($_GET['id']);

                include('edit.php');
            }
            
            if (isset($_POST['update_employee'])) {
                $nhanvien = new Nhanvien($conn);
                $employee = $nhanvien->findEmployee($_POST['id']);
                $employee->msnv = $_POST['msnv'];
                $employee->ho_ten = $_POST['ho_ten'];
                $employee->dien_thoai = $_POST['dien_thoai'];
                $employee->email = $_POST['email'];
                $employee->gioi_thieu = $_POST['gioi_thieu'];
                $employee->ngay_vao_lam = $_POST['ngay_vao_lam'];

                try {
                    if ($employee->update()) {
                        $_SESSION['message'] = "Cập nhật nhân viên thành công";
                        header("location: list.php");
                    } else {
                        throw new Exception("Lỗi: " . $conn->error);
                    }
                } catch (Exception $e) {
                    $_SESSION['error_message'] = $e->getMessage();
                    header("location: list.php");
                }
            }

        ?>

    </div>
</body>
    
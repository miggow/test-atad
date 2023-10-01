<?php
class Nhanvien {
    protected $conn;
    public $id;
    public $msnv;
    public $ho_ten;
    public $dien_thoai;
    public $email;
    public $gioi_thieu;
    public $ngay_vao_lam;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function getData($data){
        $this->id = $data['id'] ?? "";
        $this->msnv = $data['msnv'];
        $this->ho_ten = $data['ho_ten'];
        $this->dien_thoai = $data['dien_thoai'];
        $this->email = $data['email'];
        $this->gioi_thieu = $data['gioi_thieu'];
        $this->ngay_vao_lam = $data['ngay_vao_lam'];
    }

    public function getAllEmployee() {
        $sql = "SELECT * FROM employees";
        $result = $this->conn->query($sql);
        $employees = [];

        if ($result->num_rows > 0) {
            foreach($result as $employee)
            {
                // print_r($employee);
                $nhanvien = new Nhanvien($this->conn);
                $nhanvien->getData($employee);
                $employees[] = $nhanvien;
            }
        }
        $this->conn->close();
        return $employees;
    }

    public function findEmployee($id){
        $sql = "SELECT * FROM employees where id = '$id'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            $nhanvien = new Nhanvien($this->conn);
            $nhanvien->getData($result->fetch_assoc());
            return $nhanvien;
        }
        return null;
    }

    public function create() {
        $msnv = $this->msnv;
        $ho_ten = $this->ho_ten;
        $dien_thoai = $this->dien_thoai;
        $email = $this->email;
        $gioi_thieu = $this->gioi_thieu;
        $ngay_vao_lam = $this->ngay_vao_lam;

        $sql = "INSERT INTO employees (msnv, ho_ten, dien_thoai, email, gioi_thieu, ngay_vao_lam) VALUES ('$msnv', '$ho_ten', '$dien_thoai', '$email', '$gioi_thieu', '$ngay_vao_lam')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function update() {
        $id = $this->id;
        $msnv = $this->msnv;
        $ho_ten = $this->ho_ten;
        $dien_thoai = $this->dien_thoai;
        $email = $this->email;
        $gioi_thieu = $this->gioi_thieu;
        $ngay_vao_lam = $this->ngay_vao_lam;

        $sql = "UPDATE employees SET ho_ten='$ho_ten', dien_thoai='$dien_thoai', email='$email', gioi_thieu='$gioi_thieu', ngay_vao_lam='$ngay_vao_lam',  msnv='$msnv' WHERE id = '$id'";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

?>

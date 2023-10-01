<h2>Cập nhật Nhân viên</h2>
<form action="update.php" method="POST">
    <div class="form-group mt-2">
        <input type="text" hidden class="form-control" value="<?= $employee->id?>" name="id" required>
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" value="<?= $employee->msnv?>" name="msnv" required>
    </div>
    <div class="form-group mt-2">
        <label for="ho_ten">Họ tên:</label>
        <input type="text" class="form-control" value="<?= $employee->ho_ten?>" name="ho_ten" required>
    </div>
    <div class="form-group mt-2">
        <label for="dien_thoai">Điện thoại:</label>
        <input type="text" class="form-control" value="<?= $employee->dien_thoai?>" name="dien_thoai">
    </div>
    <div class="form-group mt-2">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="<?= $employee->email?>">
    </div>
    <div class="form-group mt-2">
        <label for="gioi_thieu">Giới thiệu bản thân:</label>
        <textarea class="form-control" name="gioi_thieu" rows="4" ><?= $employee->gioi_thieu?></textarea>
    </div>
    <div class="form-group mt-2">
        <label for="ngay_vao_lam">Ngày vào làm:</label>
        <input type="date" class="form-control" name="ngay_vao_lam" value="<?= $employee->ngay_vao_lam?>">
    </div>
    <button type="submit" class="btn btn-success mt-2" name="update_employee">Lưu</button>
</form>
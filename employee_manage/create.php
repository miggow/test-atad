<h2>Thêm Nhân viên</h2>
<form action="update.php" method="POST">
    <div class="form-group">
        <label for="msnv">Mã số nhân viên:</label>
        <input type="text" class="form-control" name="msnv" required>
    </div>
    <div class="form-group">
        <label for="ho_ten">Họ tên:</label>
        <input type="text" class="form-control" name="ho_ten" required>
    </div>
    <div class="form-group">
        <label for="dien_thoai">Điện thoại:</label>
        <input type="text" class="form-control" name="dien_thoai">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="gioi_thieu">Giới thiệu bản thân:</label>
        <textarea class="form-control" name="gioi_thieu" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="ngay_vao_lam">Ngày vào làm:</label>
        <input type="date" class="form-control" name="ngay_vao_lam">
    </div>
    <button type="submit" class="btn btn-success" name="store_employee">Tạo mới</button>
</form>
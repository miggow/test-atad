CREATE DATABASE employee_management;

USE employee_management;

CREATE TABLE employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  msnv VARCHAR(255) NOT NULL,
  ho_ten VARCHAR(255) NOT NULL,
  dien_thoai VARCHAR(20),
  email VARCHAR(255),
  gioi_thieu TEXT,
  ngay_vao_lam DATE
);

INSERT INTO employees (msnv, ho_ten, dien_thoai, email, gioi_thieu, ngay_vao_lam)
VALUES ('NM16022002', 'Nguyen Minh', '0961493153', 'ngminh16022002@gmail.com', 'Xin chào!!!!!!!!! tôi là Nguyễn Minh', '2002-02-16');

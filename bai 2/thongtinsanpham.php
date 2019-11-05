<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thông tin sản phẩm</title>
	<meta charset="utf-8">
	<meta name="description" content="...">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="icon_24h.ico">
</head>
<body>

	<?php 

		// khoi tao cac bien loi
		$errorTen = '';
		$errorGia = '';
		$errorMoTa = '';
		$errorNgayDang = '';
		$errorNgayHetHan = '';
		$errorSanPham = '';
		$errorNhapNgay = '';
		// khoi tao cac gia tri ban dau
		$tensanpham = '';
		$mota = '';
		$gia = '';
		$ngaydang = '';
		$ngayhethan = '';
		$sanpham = '';
		$checkValidate = true;

		if (isset($_POST['dang'])) {
			# code...
			$tensanpham = $_POST['tensanpham'];
			$mota = $_POST['mota'];
			$gia = $_POST['gia'];
			// Xu ly upload avatar
			$hinhanh = $_FILES['hinhanh'];
			// khoi tao anh mac dinh
			$tenHinhAnh = 'default.png';

			$ngaydang = $_POST['ngaydang'];
			$ngayhethan = $_POST['ngayhethan'];
			$sanpham = $_POST['sanpham'];
			// validate
			if ($tensanpham == '') {
				# code...
				$checkValidate = false;
				$errorTen = 'Vui long nhap ten san pham';
			}

			if ($mota == '') {
				# code...
				$checkValidate = false;
				$errorMoTa = 'Vui long nhap mo ta';
			}

			if ($gia == '') {
				# code...
				$checkValidate = false;
				$errorGia = 'Vui long nhap gia';
			}

			if ($hinhanh['error'] == 0) {
				# code...
				$tenHinhAnh = $hinhanh['name'];
				// echo "123456464".$hinhanh['name'];
				// upload file ảnh vào thư mục
				move_uploaded_file($hinhanh['tmp_name'], './uploads/'.$tenHinhAnh);
			}

			if ($ngaydang == '') {
				# code...
				$checkValidate = false;
				$errorNgayDang = 'Vui long chon ngay dang';
			}

			if ($ngayhethan == '') {
				# code...
				$checkValidate = false;
				$errorNgayHetHan = 'Vui long chon ngay het han';
			}

			if ($sanpham == 'none') {
				# code...
				$checkValidate = false;
				$errorSanPham = 'Vui lòng chọn sản phẩm';
			}

			if ($ngayhethan < $ngaydang) {
				# code...
				$checkValidate = false;
				$errorNhapNgay = 'Vui lòng chọn ngay het han lon hon ngay dang';
			}

			if ($checkValidate) {
				# code...
				echo "Ten san pham: $tensanpham <br>";
				echo "Mo ta: $mota <br>";
				echo "Gia: $gia <br>";
				echo "Ngay dang: $ngaydang <br>";
				echo "Ngay het han: $ngayhethan <br>";
				echo "Danh muc san pham: $sanpham <br>";
				if ($ngaydang < $ngayhethan) {
					# code...
					echo "Ngay het han: $ngayhethan <br>";
				} else {
					
				}
				echo "<img src = 'uploads/$tenHinhAnh'>";
			}
		}

	 ?>


	<div class="form-dang-san-pham">
			<h1>Dang san pham</h1>
		<form action="#" 
			name="dangsanpham" id="dangsanpham" 
			method="POST" enctype="multipart/form-data">

			<div class="form-control">
				<div class="label">Tên sản phẩm: </div>
				<div class="input">
					<input type="text" name="tensanpham" id="tensanpham" value="<?php echo $tensanpham ?>"> 
					<span class="error"><?php echo $errorTen; ?></span>
				</div>
			</div>

			<div class="form-control">
				<div class="label">Mô tả: </div>
				<div class="input">
					<textarea name="mota" id="mota" style="margin-bottom: 5px;" value="<?php echo $mota ?>"></textarea>
					<span class="error"><?php echo $errorMoTa; ?></span>
				</div>
			</div>

			<div class="form-control">
				<div class="label">Giá: </div>
				<div class="input">
					<input type="text" name="gia" id="gia" value="<?php echo $gia ?>">
					<span class="error"><?php echo $errorGia; ?></span>
				</div>
			</div>

			<div class="form-control">
				<div class="label">Hình ảnh: </div>
				<div class="input">
					<input type="file" name="hinhanh" id="hinhanh">
				</div>
			</div>

			<div class="form-control">
				<div class="label">Ngày đăng: </div>
				<div class="input">
					<input type="date" name="ngaydang" id="ngaydang" value="<?php echo $ngaydang ?>">
					<span class="error"><?php echo $errorNgayDang; ?></span>
				</div>
			</div>

			<div class="form-control">
				<div class="label">Ngày hết hạn: </div>
				<div class="input">
					<input type="date" name="ngayhethan" id="ngayhethan" value="<?php echo $ngayhethan ?>">
					<span class="error"><?php echo $errorNgayHetHan; ?></span>
					<span class="error"><?php echo $errorNhapNgay; ?></span>
				</div>
			</div>

			<div class="form-control">
				<div class="label">Danh mục sản phẩm: </div>
				<div class="input">
					<select name="sanpham">
						<option value="none">---Chọn sản phẩm---</option>
						<option value="kẹo" <?php echo ($sanpham == 'kẹo')? 'selected ': '' ?>>kẹo</option>
						<option value="bánh">bánh</option>
						<option value="kem">kem</option>
					</select>
					<span class="error"><?php echo $errorSanPham; ?></span>
				</div>
			</div>

			<div class="form-control">
				<div class="input">
					<input type="submit" name="dang" value="Đăng">
				</div>
			</div>
		</form>
	</div>

</body>
</html>
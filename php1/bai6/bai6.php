
<!DOCTYPE html>
<html>
<head>
	<title>Dang ky</title>
	<meta charset="utf-8">
	<meta name="description" content="...">
	<link rel="stylesheet" href="bai6.css">
</head>
<body>
	<form action="" method="post">
		
		<div>
			<label name="errorHoTen"></label>
			Ho ten: <input type="text" name="hoten">
		</div>
		<div>
			<label id="errorGioiTinh"></label>
			Gioi tinh: <input type="radio" name="gioitinh" value="Nam" id="nam" checked="checked">Nam
			<input type="radio" name="gioitinh" value="Nu" id="nu">Nu<br>
		</div>
		<div>
			<label id="errorQueQuan"></label>
			Que quan: 
			<select name="tinhthanh">
				<option value="none">---Chon tinh thanh---</option>
				<option value="Quang Ngai">Quang Ngai</option>
				<option value="Da Nang">Da Nang</option>
				<option value="Quang Nam">Quang Nam</option>
			</select>
		</div>
		<div>
			<label name="errorEmail"></label>
			Email: <input type="text" name="email">
		</div>
		<div>
			<label id="errorNgaySinh"></label>
			Ngay sinh: <input type="date" name="ngaysinh">
		</div>
		<button name="btn-xuat">Xuat</button>
		</form>

</body>
</html>

<?php 

	if (isset($_POST['btn-xuat'])) {

		$hoten = $_POST['hoten'];
		$gioitinh = $_POST['gioitinh'];
		$tinhthanh = $_POST['tinhthanh'];
		$email = $_POST['email'];
		$ngaysinh = $_POST['ngaysinh'];

		if ($_POST['hoten'] != "") {
			echo "Ho ten: ";
			echo $_POST['hoten']."<br>";
		} else {
			echo "Vui long nhap ho ten <br>";
		} 

		// if ($_POST['gioitinh'] != "") {
			echo "Gioi tinh: ";
			echo $_POST['gioitinh']."<br>";
		// } else {
		// 	echo "Vui long nhap gioi tinh <br>";
		// } 

		if ($_POST['tinhthanh'] != "none") {
			echo "Tinh thanh: ";
			echo $_POST['tinhthanh']."<br>";
		} else {
			echo "Vui long nhap tinh thanh <br>";
		} 

		if ($_POST['email'] != "") {
			echo "Email: ";
			echo $_POST['email']."<br>";
		} else {
			echo "Vui long nhap email<br>";
		} 

		if ($_POST['ngaysinh'] != "") {
			echo "Ngay Sinh: ";
			echo $_POST['ngaysinh']."<br>";
		} else {
			echo "Vui long nhap ngay sinh";
		} 

		if ($_POST['hoten'] != "" && $_POST['tinhthanh'] != "" && $_POST['email'] != "" && $_POST['ngaysinh'] != "") {
			 "Đăng nhập thành công!";
		}
	}

 ?>

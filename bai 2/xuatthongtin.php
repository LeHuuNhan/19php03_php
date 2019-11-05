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

		if (!empty($_POST['tensanpham']) && !empty($_POST['mota']) && !empty($_POST['gia']) && !empty($_POST['ngaydang']) && !empty($_POST['ngayhethan']) && !empty($_POST['sanpham'])) {
			# code...			
	 ?>

	 <h1>Bạn đã thêm thành công</h1>

	 <div class="thongtin">
	 	<label>Tên sản phẩm: </label>
	 	<span><?php echo $_POST['tensanpham']; ?></span>
	 	<?php 
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
	 	 ?>
	 </div>

	 <?php 
	 	}
	  ?>

</body>
</html>
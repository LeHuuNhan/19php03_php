<form action="" method="post">
	
	 Nhập họ tên: <input type="text" name="hoTen"><br>
	 Nhập quê quán: <input type="text" name="queQuan"><br>
 	 Nhập số điện thoại: <input type="text" name="sdt"><br>
 	 <button type="submit">Xuat</button>

</form>

<p><?php 

	// echo "hello";
	if (isset($_POST['hoTen']) && isset($_POST['queQuan']) && isset($_POST['sdt'])) {
		# code...
		echo $_POST['hoTen'];
		echo $_POST['queQuan'];
		echo $_POST['sdt'];
	}

 ?></p>

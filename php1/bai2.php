<form action="" method="post">
	Nhap so thang: <input type="number" name="soThang"><br>
	<button>Kiem tra</button>
</form>

<?php 
	
	if (isset($_POST['soThang'])) {
		// if (sothang > 0 && sothang <= 12) {
			switch ($_POST['soThang']) {
				case '1':
					echo "thang 1 co : 30 ngay";
					break;

				case '2':
					echo "thang 1 co : 30 ngay";
					break;

				case '3':
					echo "thang 1 co : 30 ngay";
					break;

				case '4':
					echo "thang 1 co : 30 ngay";
					break;

				case '5':
					echo "thang 1 co : 30 ngay";
					break;

				case '6':
					echo "thang 1 co : 30 ngay";
					break;

				case '7':
					echo "thang 1 co : 30 ngay";
					break;

				case '8':
					echo "thang 1 co : 30 ngay";
					break;

				case '9':
					echo "thang 1 co : 30 ngay";
					break;

				case '10':
					echo "thang 1 co : 30 ngay";
					break;

				case '11':
					echo "thang 1 co : 30 ngay";
					break;

				case '12':
					echo "thang 1 co : 30 ngay";
					break;
				
				default:
					echo "vui long nhap dung so thang cua nam";
					break;
			}
		// }
	}

 ?>
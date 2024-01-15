<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php
	$tour = '';
	$phuongtien = '';
	$ngaykh = '';
	$soluong = 0;
	$tenkh = '';
	$dc = '';
	$sodt = '';
	$yeucau = '';
	if (isset($_POST['tour'])) {
		$tour = $_POST['tour'];
		$phuongtien = $_POST['phuongtien'];
		$ngaykh = $_POST['ngay'];
		$soluong = $_POST['soluong'];
		$tenkh = $_POST['tenkhach'];
		$dc = $_POST['diachi'];
		$sodt = $_POST['dienthoai'];
		$yeucau = $_POST['yeucau'];
	}
	function giaTour($tour)
	{
		$sotien = 0;

		switch ($tour) {
			case "Hà Nội - Hạ Long - Sapa":
				$sotien = 6000000;
				break;
			case "Hà Nội - Hải Phòng":
				$sotien = 5500000;
				break;
			case "Hà Nội - Điện Biên":
				$sotien = 5500000;
				break;
			case "Huế - Bạch Mã - Đà Nẵng":
				$sotien = 5000000;
				break;
			case "Nha Trang - Đà Lạt":
				$sotien = 3000000;
				break;
			case "Buôn mê thuộc - Gia lai - Komtum":
				$sotien = 3500000;
				break;
			case "TP HCM - Phú Quốc":
				$sotien = 4000000;
				break;
			case "TP HCM - Cần Thơ":
				$sotien = 4500000;
				break;
			case "TP HCM - Mỹ Tho":
				$sotien = 3000000;
				break;
		}
		return $sotien;
	}
	function phuongTien($phuongtien, $tour)
	{
		$tientuor = 0;
		switch ($phuongtien) {
			case 'Máy bay':
				$tientuor = 1 * giaTour($tour);
				break;
			case 'Xe máy':
				$tientuor = 0.8 * giaTour($tour);
				break;
			case 'Tàu hỏa':
				$tientuor = 0.95 * giaTour($tour);
				break;
			case 'Xe hơi':
				$tientuor = 0.9 * giaTour($tour);
				break;
			case 'Tàu thủy':
				$tientuor = 0.9 * giaTour($tour);
				break;
		}
		return $tientuor;

	}

	?>
	<form action="dangkytuourdulich.php" method="post" name="form1" id="form1">
		<table width="600" border="0" align="center" cellpadding="1" cellspacing="1">
			<tbody>
				<tr>
					<td colspan="2" align="center" bgcolor="#17335A" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color: #F5E6E7; font-weight: bold;">ĐĂNG KÝ TOUR DU LỊCH</td>
				</tr>
				<tr>
					<td width="173" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Tên tour</td>
					<td width="420" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><select name="tour" id="tour">
							<optgroup label="Miền Bắc">
								<option value="Hà Nội - Hạ Long - Sapa" <?php
								if($tour == 'Hà Nội - Hạ Long - Sapa'){
									echo "selected";
								}
																		?>>
									Hà Nội - Hạ Long - Sapa</option>
								<option value="Hà Nội - Hải Phòng" <?php
								if($tour == 'Hà Nội - Hải Phòng'){
									echo "selected";
								}
																	?>>
									Hà Nội - Hải Phòng</option>
								<option value="Hà Nội - Điện Biên" <?php
								if($tour == 'Hà Nội - Điện Biên'){
									echo "selected";
								}
																	?>>
									Hà Nội - Điện Biên</option>
							</optgroup>
							<optgroup label="Miền Trung">
								<option value="Huế - Bạch Mã - Đà Nẵng" <?php
								if($tour == 'Huế - Bạch Mã - Đà Nẵng'){
									echo "selected";
								}
																		?>>
									Huế - Bạch Mã - Đà Nẵng</option>
								<option value="Nha Trang - Đà Lạt" <?php
								if($tour == 'Nha Trang - Đà Lạt'){
									echo "selected";
								}
																	?>>
									Nha Trang - Đà Lạt</option>
								<option value="Buôn mê thuộc - Gia lai - Komtum" <?php
								if($tour == 'Buôn mê thuộc - Gia lai - Komtum'){
									echo "selected";
								}
																					?>>
									Buôn mê thuộc - Gia lai - Komtum</option>
							</optgroup>
							<optgroup label="Miền Nam">
								<option value="TP HCM - Phú Quốc" <?php
								if($tour == 'TP HCM - Phú Quốc'){
									echo "selected";
								}
																	?>>
									TP HCM - Phú Quốc</option>
								<option value="TP HCM - Cần Thơ" <?php
								if($tour == 'TP HCM - Cần Thơ'){
									echo "selected";
								}
																	?>>
									TP HCM - Cần Thơ</option>
								<option value="TP HCM - Mỹ Tho" <?php
									if($tour == 'TP HCM - Mỹ Tho'){
										echo "selected";
									}
																?>>
									TP HCM - Mỹ Tho</option>
							</optgroup>
						</select></td>
				</tr>
				<tr>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Ngày khởi hành:</td>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="ngay" id="ngay" value="<?php echo $ngaykh; ?>"></td>
				</tr>
				<tr>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Phương tiện di chuyển</td>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><select name="phuongtien" id="phuongtien" value="<?php echo $phuongtien; ?>">
							<option value="Máy bay" <?php
							if($phuongtien == 'Máy bay'){
								echo "selected";
							}
													?>>Máy bay</option>
							<option value="Tàu hỏa" <?php
								if($phuongtien == 'Tàu hỏa'){
									echo "selected";
								}
													?>>Tàu hỏa</option>
							<option value="Xe hơi" <?php
							if($phuongtien == 'Xe hơi'){
								echo "selected";
							}
													?>>Xe hơi</option>
							<option value="Tàu thủy" <?php
							if($phuongtien == 'Tàu thủy'){
								echo "selected";
							}
														?>>Tàu thủy</option>
							<option value="Xe máy" <?php
							if($phuongtien == 'Xe máy'){
								echo "selected";
							}
													?>>Xe máy</option>
						</select></td>
				</tr>
				<tr>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Số lượng đăng ký:</td>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="soluong" id="soluong" value="<?php echo $soluong; ?>"></td>
				</tr>
				<tr>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Tên khách hàng:</td>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="tenkhach" id="tenkhach" value="<?php echo $tenkh; ?>"></td>
				</tr>
				<tr>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Liên hệ theo địa chỉ:</td>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="diachi" id="diachi" value="<?php echo $dc; ?>"></td>
				</tr>
				<tr>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Số điện thoại</td>
					<td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="dienthoai" id="dienthoai" value="<?php echo $sodt; ?>"></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Những yêu cầu kèm theo</td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><textarea name="yeucau" cols="60" rows="2" id="yeucau"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Đăng Ký Tour"></td>
				</tr>
			</tbody>
		</table>
	</form>
	<?php
		function tinhTongTien($soluong,$phuongtien,$tour){
			$tongtien = 0;
			$tongtien = $soluong*phuongTien($phuongtien,$tour);
			return $tongtien;
		}
	?>
	<?php echo
	"<table width='600' border='0' align='center' cellpadding='1' cellspacing='1' bgcolor='##A8C8F5'>
		<tr align='center'>
			<td><b>
					<font color='#FF0000'>THÔNG TIN ĐẶT CHỔ</font>
				</b></td>
		</tr>

		<tr align='left'>
			<td>
				Khách hàng đã chọn Tour:<b><i>$tour</i></b></br>
				Ngày khởi hành: $ngaykh</br>
				Phương tiện: $phuongtien</br>

		<tr align='left'>
			<td>
				Số lượng đăng kýr:<b><i>$soluong Khách</i></b></br>
				Giá tour/khách:" .phuongTien($phuongtien,$tour)."</br>
				Tổng tiền cho $soluong khách: ".tinhTongTien($soluong,$phuongtien,$tour)." </br>

		<tr align='left'>
			<td>
				Thông tin khách hàng:</br>
				Họ tên:<b><i>$tenkh</i></b> - Địa chỉ: $dc</br>
				Số điện thoại: $sodt</br>

		<tr align='left'>
			<td>
				Các yêu cầu kèm theo:</br>" .($yeucau) . "


				<p align='center'>
					<font color='#FF0000'>
						<i><strong>Cần phải có thông tin của khách hàng khi đăng ký đặt tour!</i></strong>
					</font>
				</p>"
	?>






</body>

</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
?>
<form action="DangKyPhongDay.php" method="get" name="form1" id="form1">
  <table width="500" border="0" align="center" cellpadding="1" cellspacing="1">
    <tbody>
      <tr>
        <td align="center" bgcolor="#D540E9" style="font-weight: bold; color: #F5E8E8;">ĐĂNG KÝ PHÒNG DẠY</td>
      </tr>
      <tr>
        <td align="center">Phòng số: 
          <label for="phong">Select:</label>
          <select name="phong" id="phong">
            <option value="A001">A001</option>
            <option value="B001">B001</option>
            <option value="Giarng đường 1">Giảng đường 1</option>
            <option value="Giảng đường 2">Giảng đường 2</option>
        </select></td>
      </tr>
      <tr>
        <td align="center">Giáo Sư Giảng Dạy:
        <input name="gv" type="text" id="gv" value=""></td>
      </tr>
      <tr>
        <td align="center">Ngày/ Tháng. Năm
          <label for="ngay">Select:</label>
          <select name="ngay" id="ngay">
		  <?php

			
		  ?>
        </select></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="submit" id="submit" value="Ghi Nhận"></td>
      </tr>
    </tbody>
  </table>
</form>
<!-- hiển thị đây -->
	<table width='500' border='0' align='center' cellpadding='1' cellspacing='1' bgcolor='#FFBFAA'>
	<tr> <td align='center'>
		Kết Quả Sau Khi Bấm GHi Nhận </td></tr>
	<tr><td align='center'>
	
		Ngày $date </br>
		Giáo Sư  đã dạy phòng 
	</td></tr></table>
<!-- end -->
</body>
</html>
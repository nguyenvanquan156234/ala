<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="TheoDoiHocTap.php" method="post" name="form1" id="form1">
  <table width="500" border="0" align="center" cellpadding="1" cellspacing="1">
    <tbody>
      <tr>
        <td colspan="3" align="center" bgcolor="#606060" style="font-weight: bold">THEO DÕI HỌC TẬP</td>
      </tr>
      <tr>
        <td width="138" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Họ tên học sinh</td>
        <td width="228" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><input type="text" name="hths" id="hths"></td>
        <td width="124" rowspan="5" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><img src="thang_canh/book.jpg" width="100" height="100" alt=""/></td>
      </tr>
      <tr>
        <td style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Giáo viên phụ trách</td>
        <td style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><input type="text" name="gvpt" id="gvpt"></td>
      </tr>
      <tr>
        <td colspan="2" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Lớp
          <input name="lop" type="text" id="lop" maxlength="10">
Ngày
<input type="text" name="ngay" id="ngay"></td>
      </tr>
      <tr>
        <td colspan="2" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Những công việc chưa làm</td>
      </tr>
      <tr>
        <td colspan="2" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><textarea name="congviec" id="congviec" rows="3" cols="50"></textarea></td>
      </tr>
      <tr>
        <td colspan="3" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Chọn hình thức hoàn thành</td>
      </tr>
      <tr>
        <td colspan="3" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><p>
          <input name="tailop" type="checkbox" id="tailop" value="tại lớp">
          <label for="tailop">Checkbox </label>
        Những việc chưa làm sẽ được hoàn thành ngay tại lớp</p></td>
      </tr>
      <tr>
        <td colspan="3" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><input name="tainha" type="checkbox" id="tainha" value="tại nhà">
          <label for="tainha">Checkbox </label>
        Sẽ hoàn thành những việc chưa làm tại nhà và nộp lại cho giáo viên vào ngày hôm sau</td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input type="submit" name="submit" id="submit" value="Ghi Nhận"></td>
      </tr>
    </tbody>
  </table>
</form>
<!-- code tại đây -->
<?php
	
	?>
<table width="500" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#BD73DD">
  <tbody>
    <tr>
      <td align="center" style="font-weight: bold; color: #EDDEDE;">THÔNG TIN PHIẾU THEO DÕI</td>
    </tr>
    <tr>
      <td style="color: #DDD6D6">Tên học sinh: Lớp: </td>
    </tr>
    <tr>
      <td style="color: #DDD6D6">Ngày đăng Ký - Giáo viên phụ trách</td>
    </tr>
    <tr>
      <td style="color: #DDD6D6">Những công việc đã được phân công nhưng chưa hoàn thành:</td>
    </tr>
    <tr>
      <td style="color: #DDD6D6">&nbsp;</td>
    </tr>
	<tr>
      <td style="color: #DDD6D6">Cam kết sẽ hoàn thành </td>
    </tr>
  </tbody>
</table>
	
</body>
</html>
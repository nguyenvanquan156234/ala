<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Session</title>
<?php
  session_start();
?>
<style type="text/css">
.style5 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #FFFFFF;
}
.style10 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: smaller; }

</style></head>

<body>
  <?php
    if(isset($_POST['Submit'])){
      $_SESSION['hoten'] = $_POST['ho_ten'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['username'] = $_POST['ten_dn'];
      $_SESSION['pass'] = $_POST['mat_khau'];
    }
  ?>
<form name="form1" method="post" action="p2_c3_b1.php">
  <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#009FAA">
    <tr bgcolor="#B8C9D1">
      <td colspan="2" bgcolor="#006F77"><div align="center"><span class="style5">THÔNG TIN ĐĂNG NHẬP </span></div></td>
    </tr>
    <tr>
      <td width="102"><span class="style10">Họ và tên:</span></td>
      <td width="234"><span class="style10">
        <label>
        <input name="ho_ten" type="text" id="ho_ten" size="35">
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style10">Email:</span></td>
      <td><span class="style10">
        <label>
        <input name="email" type="text" id="email" size="35">
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style10">Tên đăng nhập: </span></td>
      <td><span class="style10">
        <label>
        <input name="ten_dn" type="text" id="ten_dn">
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style10">Mật khẩu </span></td>
      <td><span class="style10">
        <label>
        <input name="mat_khau" type="password" id="mat_khau">
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
          <input type="submit" name="Submit" value="Đăng nhập">      </td>
    </tr>
  </table>
</form>
<a href="p2_c3_b1_doc.php">click</a>
<p align="center"><font color="#FF0000"></font></p>

</body>
</html>

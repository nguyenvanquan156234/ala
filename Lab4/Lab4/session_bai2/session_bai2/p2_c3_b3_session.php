<?php session_start();?>
<html>
<head>
<title>Session</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style2 {font-family: "Times New Roman", Times, serif}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #DF0038;
	font-size: 24px;
}
.style15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; color: #990000; font-weight: bold; }

</style>
</head>

<body>
  <?php
    if(isset($_POST['Submit'])){
      $_SESSION['ten']=$_POST['ten'];
      $_SESSION['matkhau']=$_POST['password'];
    }
  
  ?>
<form name="form1" method="post" action="p2_c3_b3_session.php">
  <table width="358" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr bgcolor="#FFFFFF">
      <td colspan="2" align="center" bgcolor="#FFCC66" class="style4">ĐĂNG NHẬP</div></td>
    </tr>
    <tr>
      <td width="121"><span class="style15">&nbsp;T&ecirc;n đăng nhập:</span></td>
      <td width="223" align="center">
      <input name="ten" type="text" id="ten" size="25">      </td>
    </tr>
    <tr>
      <td><span class="style15">&nbsp;Mật khẩu:</span></td>
      <td align="center">
      <input name="password" type="password" id="password" size="25">      </td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="center" class="style2">
        <input type="submit" name="Submit" value="Đăng nhập">      </td>
    </tr>
  </table>
</form>
<p align="center">
    <?php
      if(isset($_SESSION['ten'])){
        echo "chào ".$_SESSION['ten']." bạn đã đăng nhập thành công" ;
      }
    ?>
</p>
<a href="./p2_c3_b3.php" align="center">quay lại trang đặt hàng</a>
</body>
</html>

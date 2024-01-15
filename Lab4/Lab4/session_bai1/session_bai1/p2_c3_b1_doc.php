<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Session</title>
<style type="text/css">

.style2 {font-family: "Times New Roman", Times, serif}

</style></head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" background="../hinh_anh/brg.gif">
  <tr>
    <td width="355"><img src="../hinh_anh/hinh_4.jpg" width="354" height="71"></td>
    <td width="365" align="right">
      <?php
          if (isset($_SESSION['hoten']) && isset($_SESSION['username']) && isset($_SESSION['email'])) {
            echo "Xin chào " . $_SESSION['hoten'] . "<br/> Tên đăng nhập là: " . $_SESSION['username'] . "<br/> Email là: " 
            . $_SESSION['email'];
        } 
      
      ?>
  </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><img src="../hinh_anh//hinh_7.jpg" width="400" height="603"></div></td>
  </tr>
</table>
<p>&nbsp; </p>
</body>
</html>

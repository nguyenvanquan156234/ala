<?php session_start();?>
<html>
<head>
<title>Dat hang</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	color: #FF3366;
	font-size: x-large;
}
.style2 {font-family: "Times New Roman", Times, serif}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #DF0038;
}
.style11 {font-size: smaller; font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}
.style12 {
	color: #990000;
	font-weight: bold;
}
.style13 {
	font-size: smaller;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #990000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
(code)
<form name="form1" method="post" action="p2_c2_b3.php">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr>
      <td colspan="2" bgcolor="#FFCC66"><div align="center" class="style1 style5">C&Aacute;C SẢN PHẨM</div></td>
    </tr>
    <tr>
      <td width="180" bordercolor="#CC3366" class="style11 style12">&nbsp;Ch&uacute;ng t&ocirc;i c&oacute;:</td>
      <td width="206" bordercolor="#CC3366" class="style2">
      <select name="ten">
		<optgroup label="Kem">
		<option value="Kem bốn mùa">Kem bốn mùa</option>
		<option value="Kem thập cẩm">Kem thập cẩm</option>
		</optgroup>
		<optgroup label="Bánh">
		<option value="Bông lan lá dứa">Bông lan lá dứa</option>
		<option value="Bông lan sữa tươi">Kem trái cây</option>
		</optgroup>
	   </select>	  </td>
    </tr>
    <tr>
      <td bordercolor="#CC3366" class="style13">&nbsp;Địa chỉ giao h&agrave;ng:</td>
    <td bordercolor="#CC3366"><input name="add" type="text" id="add" size="35" value="<?php echo $_POST["add"];?>"></td>
    </tr>
    <tr>> 
      <td colspan="2" align="center" class="style2">
      <input type="submit" name="Submit" value="Đặt hàng">      </td>
    </tr>
  </table>
</form>
(code)
</body>
</html>

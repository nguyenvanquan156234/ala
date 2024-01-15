<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Phep toan</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css">
    .style1 {
      font-size: large;
      font-weight: bold;
      color: #990000;
    }

    .style2 {
      font-family: Arial, Helvetica, sans-serif
    }

    .style9 {
      font-size: x-large
    }

    .style12 {
      font-family: MERcuriusScript, MYstical, NUeva;
      font-size: 20px;
      color: #CA4B00;
    }

    .style20 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      color: #2A0000;
      font-size: smaller;
      font-weight: bold;
    }

    .style21 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }
  </style>
</head>

<body>
  <?php
  $sothunhat = '';
  $sothuhai = '';
  $pheptinh = '';
  $ketqua = '';

  class PhepTinh
  {
    private $sothunhat;
    private $sothuhai;

    public function __construct($sothunhat, $sothuhai)
    {
      $this->sothunhat = $sothunhat;
      $this->sothuhai = $sothuhai;
    }

    // Getter cho thuộc tính sothunhat
    public function getSoThuNhat()
    {
      return $this->sothunhat;
    }

    // Setter cho thuộc tính sothunhat
    public function setSoThuNhat($sothunhat)
    {
      $this->sothunhat = $sothunhat;
    }

    // Getter cho thuộc tính sothuhai
    public function getSoThuHai()
    {
      return $this->sothuhai;
    }

    // Setter cho thuộc tính sothuhai
    public function setSoThuHai($sothuhai)
    {
      $this->sothuhai = $sothuhai;
    }

    // Các phương thức tính toán
    public function tinhTong()
    {
      return $this->sothunhat + $this->sothuhai;
    }

    public function tinhHieu()
    {
      return $this->sothunhat - $this->sothuhai;
    }

    public function tinhTich()
    {
      return $this->sothunhat * $this->sothuhai;
    }

    public function tinhThuong()
    {
      if ($this->sothuhai != 0) {
        return $this->sothunhat / $this->sothuhai;
      } else {
        return 'Không thể chia cho 0';
      }
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sothunhat = $_POST['so_thu_1'];
    $sothuhai = $_POST['so_thu_2'];
    $pheptinh = $_POST['phep_tinh'];

    // Tạo đối tượng PhepTinh và gán giá trị cho các thuộc tính
    $phepTinh = new PhepTinh($sothunhat, $sothuhai);

    
    

    switch ($pheptinh) {
      case '+':
        $ketqua = $phepTinh->tinhTong();
        break;
      case '-':
        $ketqua = $phepTinh->tinhHieu();
        break;
      case '*':
        $ketqua = $phepTinh->tinhTich();
        break;
      case '/':
        $ketqua = $phepTinh->tinhThuong();
        break;
      default:
        $ketqua = 'Phép tính không hợp lệ';
    }
  }
  ?>
  <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFEBCA">
      <tr bgcolor="#FFCC66">
        <td colspan="3" align="center" bgcolor="#FFCC66" class="style1 style12">PHÉP TÍNH</td>
      </tr>
      <tr>
        <td width="98"><span class="style20">Số thứ nhất:</span></td>
        <td width="202" colspan="2"><span class="style2">
            <input name="so_thu_1" type="text" id="so_thu_12" size="20" value="<?php echo $sothunhat; ?>">
          </span></td>
      </tr>
      <tr>
        <td><span class="style20">Số thứ hai: </span></td>
        <td colspan="2"><span class="style2">
            <input name="so_thu_2" type="text" id="so_thu_22" size="20" value="<?php echo $sothuhai; ?>">
          </span></td>
      </tr>
      <tr align="center">
        <td height="35" colspan="3">
          <span class="style21">
            <input name="phep_tinh" type="radio" value="+" <?php if ($pheptinh == '+') echo "checked='checked'"; ?>>
            Cộng
            <input type="radio" name="phep_tinh" value="-" <?php if ($pheptinh == '-') echo "checked='checked'"; ?>>
            Trừ
            <input type="radio" name="phep_tinh" value="*" <?php if ($pheptinh == '*') echo "checked='checked'"; ?>>
            Nhân
            <input type="radio" name="phep_tinh" value="/" <?php if ($pheptinh == '/') echo "checked='checked'"; ?>>
            Chia&nbsp; </span>
          <input type="submit" name="Submit" value="Tính">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <span class="style2">
            <strong>Kết quả: <?php
                              echo $sothunhat . " " . $pheptinh . " " . $sothuhai . " =" . $ketqua ?>
            </strong>
          </span>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
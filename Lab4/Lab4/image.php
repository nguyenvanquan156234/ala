<?php

?>
<html>

<head>
  <title>Hien thi hinh anh</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    .style4 {
      font-family: MERcuriusScript, MYstical, NUeva;
      font-size: 20px;
      color: #CA4B00;
    }

    .style13 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }
  </style>
</head>

<body>
  <?php
  $ten = '';
  $đuongdan = '';
  $ghichu = '';
  $chieurong = '';
  $chieucao = '';
  $duongvien = '';
  $canhle = '';

  class image
  {
    var $src;
    var $alt;
    var $width;
    var $height;
    var $border;
    var $align;
    var $title;

    public function __construct($src, $alt, $width, $height, $border, $align, $title)
    {
      $this->src = $src;
      $this->alt = $alt;
      $this->title = $title;
      $this->width = $width;
      $this->border = $border;
      $this->height = $height;
      $this->align = $align;
    }

    public function getSrc()
    {
      return $this->src;
    }
    public function getalt()
    {
      return $this->alt;
    }
    public function gettitle()
    {
      return $this->title;
    }
    public function getwidth()
    {
      return $this->width;
    }
    public function getborder()
    {
      return $this->border;
    }
    public function getheight()
    {
      return $this->height;
    }
    public function getAlign()
    {
      return $this->align;
    }
    public function setSrc($src)
    {
      $this->src = $src;
    }
    public function setalt($alt)
    {
      $this->alt = $alt;
    }
    public function setwidth($width)
    {
      $this->width = $width;
    }
    public function setheight($height)
    {
      $this->height = $height;
    }
    public function settitle($title)
    {
      $this->title = $title;
    }
    public function setborder($border)
    {
      $this->border = $border;
    }
    public function setalign($align)
    {
      $this->align = $align;
    }

    public function hienThiAnh()
    {
      echo "<table align='{$this->getAlign()}'>
        <tr align='{$this->getAlign()}'><td><b>{$this->gettitle()}</b></td></tr>
        <tr><td><img border='{$this->getborder()}' src='./{$this->getSrc()}' alt='{$this->getalt()}' width='{$this->getwidth()}' height='{$this->getheight()}'></td></tr>
      </table>";
      
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $src = $_POST['src'];
    $alt = $_POST['alt'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $border = $_POST['border'];
    $align = $_POST['align'];

    $img = new image($src, $alt, $width, $height, $border, $align, $title);
    
  }



  ?>
  
  <form action="image.php" method="post" enctype="multipart/form-data" name="form1">
    <table width="450" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
      <tr bgcolor="#B8C9D1">
        <td colspan="4" align="center" bgcolor="#FFCC66"><span class="style4">HIỂN THỊ HÌNH ẢNH </span></td>
      </tr>
      <tr>
        <td><span class="style13">&nbsp; Tiêu đề:</span></td>
        <td colspan="3"><input name="title" type="text" id="title" size="40"></td>
      </tr>
      <tr>
        <td width="154">
          <p class="style13">&nbsp;&nbsp;Đường dẫn hình:</p>
        </td>
        <td colspan="3"><input name="src" type="text" id="src" size="40"></td>
      </tr>
      <tr>
        <td>
          <p class="style13">&nbsp;&nbsp;Dòng ghi chú:</p>
        </td>
        <td colspan="3"><input name="alt" type="text" id="alt" size="40"></td>
      </tr>
      <tr>
        <td>
          <p class="style13">&nbsp;&nbsp;Chiều rộng:</p>
        </td>
        <td width="55"><input name="width" type="text" id="width" size="8"></td>
        <td width="83"><span class="style13">Chiều cao:</span></td>
        <td width="132"><input name="height" type="text" id="height" size="8"></td>
      </tr>
      <tr>
        <td>
          <p class="style13">&nbsp;&nbsp;Đường viền:</p>
        </td>
        <td><input name="border" type="text" id="border" size="8"></td>
        <td><span class="style13">Canh lề: </span></td>
        <td><span class="style13">
            <label>
              <select name="align" id="align">
                <option value="left">left</option>
                <option value="right">right</option>
                <option value="center">center</option>
              </select>
            </label>
          </span></td>
      </tr>
      <tr>
        <td height="30" colspan="4" align="center"><label></label>
          <input type="submit" name="Submit" value="Hiển thị">
          <?php if (isset($img)) $img->hienThiAnh(); 
          ?>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
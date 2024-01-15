<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Quan ly nhan vien</title>
  <style type="text/css">

    .style2 {
      font-size: 20px;
      font-family: LucidaHandwriting, LucidaCalligraphy;
      font-weight: bold;
      color: #CA4B00;
    }

    .style17 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }

    .style18 {
      font-family: Verdana, Arial, Helvetica, sans-serif
    }
  
  </style>
</head>

<body>
  <?php 
    class nhanvien{
      var $hoten;
      var $ngaysinh;
      var $gioitinh;
      var $ngayvaolam;
      var $hesoluong;
      var $socon;
      var $thamnien;
      const luongcanban = 450000;
      public function __construct($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon) 
      {
        $this ->hoten = $hoten;
        $this ->ngaysinh = $ngaysinh;
        $this ->gioitinh = $gioitinh;
        $this ->ngayvaolam = $ngayvaolam;
        $this ->hesoluong = $hesoluong;
        $this ->socon = $socon;
       

        
      }
      public function getHoTen(){
        return $this -> hoten;
      }
      public function getNgaySinh(){
        return $this -> ngaysinh;
      }
      public function getGioiTinh(){
        return $this -> gioitinh;
      }
      public function getNgayVaoLam(){
        return $this -> ngayvaolam;
      }
      public function getHeSoLuong(){
        return $this -> hesoluong;
      }
      public function getSoCon(){
        return $this -> socon;
      }
      public function getThamNien(){
        return $this -> hoten;
      }
      public function setHoTen($hoten){
        $this->hoten = $hoten;
      }
      public function setSoCon($socon){
        $this->socon = $socon;
      }
      public function setNgaySinh($ngaysinh){
        $this->ngaysinh = $ngaysinh;
      }
      public function setNgayVaoLam($ngayvaolam){
        $this->ngayvaolam = $ngayvaolam;
      }
      public function setGioiTinh($gioitinh){
        $this->gioitinh = $gioitinh;
      }
      public function setThamNien($thamnien){
        $this->thamnien = $thamnien;
      }
      public function setHeSoLuong($hesoluong){
        $this->hesoluong = $hesoluong;
      }
      public function troCap(){
        return $this->getSoCon() *100000;
      }
      public function tienLuong(){
        return self::luongcanban * $this->getHeSoLuong();
      }
    }
    class NVVP extends nhanvien{
      var $songayvang;
      var $tangca;
      const dinhmucvang = 2;
     
    
      const dongiaphat= 25000;
     public function __construct($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon,$songayvang,$tangca) {
      parent::__construct($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon);
      $this -> songayvang= $songayvang;
      $this->tangca= $tangca ;
     }
     public function getSoNgayVang(){
      return $this->songayvang;
    }
    
    public function setSoNgayVang($songayvang){
       $this->songayvang=$songayvang;
    }
    public function getTangCa(){
      return $this->tangca;
    }
    public function setTangca($tangca){
      $this->tangca= $tangca ;
    }
  
      public function tienPhat(){
        if($this->getSoNgayVang() < self::dinhmucvang ){
          return 0;
        }else{
          return ($this->getSoNgayVang() - self::dinhmucvang ) *25000;
        }
      }
      
      public function troCap(){
        if($this ->getGioiTinh() == 1 && $this->getTangCa() == 1 ){
          return $this->getSoCon() *100000*1.2;
        }else{
          return $this->getSoCon() *100000;
        }
      }
      public function tienLuong()
      {
        return parent::tienLuong() - $this->tienPhat();
      }

    }
    class NVSX extends nhanvien{
      var $sosanpham;
      const dinhmucsanpham=100;
      const dongiasanpham=12000;
      var $tangca;
      public function __construct($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon,$sosanpham,$tangca) {
        parent::__construct($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon);
        $this->sosanpham=$sosanpham;
        $this->tangca = $tangca;
      }
      public function getSoSanPham(){
        return $this->sosanpham;
      }
      public function setSoSanPham($sosanpham){
        $this->sosanpham= $sosanpham ;
      }
      public function getTangCa(){
        return $this->tangca;
      }
      public function setTangca($tangca){
        $this->tangca= $tangca ;
      }
      public function tienThuong(){
        if($this->getSoSanPham() > self::dinhmucsanpham){
          return ($this->getSoSanPham() - self::dinhmucsanpham)*self::dongiasanpham *0.05;
        }else{
          return $this->getSoSanPham() *self::dongiasanpham *0.01;
        }
      }
      public function troCap(){
        if($this->getTangCa() == 1){
          return $this->getSoCon() *100000 + 200000;
        }else{
          return $this->getSoCon() *100000;
        }
      }
      public function tienLuong()
      {
        return ($this->getSoSanPham() * self::dongiasanpham) + $this->tienThuong();
      }
    }
    $hoten = '';
    $socon = '';
    $ngaysinh = '';
    $ngayvaolam = '';
    $gioitinh = '';
    $hesoluong = '';
    $loai = '';
    $songayvang = '';
    $sosanpham = '';
    $tangca = '';
    $tienluong = '';
    $trocap = '';
    $thuclinh = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $hoten = $_POST['ho_ten'];
      $socon = intval($_POST['so_con']);
      $ngaysinh = $_POST['ngay_sinh'];
      $ngayvaolam= $_POST['ngay_vao'];
      $gioitinh =  $_POST['gioi_tinh'];
      $hesoluong = $_POST['hsl'];
      $loai = $_POST['loai'];
      $songayvang = intval($_POST['vang']);
      $sosanpham = intval($_POST['sp']);
      $tangca = $_POST['tang_ca'];
      $tienluong = $_POST['luong'];
      $trocap=$_POST['tro_cap'];
      $thuclinh = $_POST['thuc_linh'];
      
      $nhanvien = new nhanvien($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon);
      $tienluong = $nhanvien->tienLuong();
      if($loai==1){
        $vp = new NVVP($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon,$songayvang,$tangca);
        
        $trocap = $vp->troCap();
        $thuclinh = $tienluong+$trocap;
      }else if($loai==0){
        $sx = new NVSX($hoten,$ngaysinh,$gioitinh,$ngayvaolam,$hesoluong,$socon,$sosanpham,$tangca);
        
        $trocap = $sx->troCap();
        $thuclinh = $tienluong+$trocap;
      }
    }
  ?>
  <form id="form1" name="form1" method="post" action="p2_c3_b5_nhanvien.php">
    <table width="70%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
      <tr>
        <td colspan="4" align="center" bgcolor="#FFCC66"><span class="style2">QUẢN LÝ NHÂN VIÊN</span></td>
      </tr>
      <tr>
        <td width="18%"><span class="style17">Họ và tên: </span></td>
        <td width="30%"><span class="style17">
            <label>
              <input name="ho_ten" type="text" id="ho_ten" size="25" value="<?php echo $hoten; ?>" />
            </label>
          </span></td>
        <td width="24%"><span class="style17">Số con: </span></td>
        <td width="28%"><span class="style17">
            <label>
              <input name="so_con" type="text" id="so_con" size="5" value="<?php echo $socon; ?>" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td valign="middle"><span class="style17">Ngày sinh: </span></td>
        <td><span class="style17">
            <label>
              <input name="ngay_sinh" type="text" id="ngay_sinh" size="20" value="<?php echo $ngaysinh; ?>" />
            </label>
          </span></td>
        <td><span class="style17">Ngày vào làm: </span></td>
        <td><span class="style17">
            <label>
              <input name="ngay_vao" type="text" id="ngay_vao" size="20" value="<?php echo $ngayvaolam; ?>" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td><span class="style17">Giới tính: </span></td>
        <td valign="middle">
          <p class="style17">
            <label>
              <input name="gioi_tinh" type="radio" value="0" <?php if ($gioitinh == '0') echo "checked='checked'"; ?> />
              Nam</label>
            <label>
              <input type="radio" name="gioi_tinh" value="1" <?php if ($gioitinh  == '1') echo "checked='checked'"; ?> />
              Nữ</label>
          </p>
          <span class="style17">
            <label></label>
          </span>
        </td>
        <td><span class="style17">Hệ số lương: </span></td>
        <td><span class="style17">
            <label>
              <input name="hsl" type="text" id="hsl" size="5" value="<?php echo $hesoluong; ?>" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFE1"><span class="style17">Loại nhân viên: </span></td>
        <td bgcolor="#FFFFE1">

          <span class="style17">
            <input type="radio" name="loai" value="1" <?php if ($loai == '1') echo "checked='checked'"; ?> />
            Văn phòng </span>
        </td>
        <td colspan="2" bgcolor="#FFFFE1">
          <span class="style17">
            <input type="radio" name="loai" value="0" <?php if ($loai == '0') echo "checked='checked'"; ?> />
            Sản xuất</span>
        </td>
      </tr>
      <tr>
        <td bgcolor="#FFFFE1"></td>
        <td bgcolor="#FFFFE1" class="style17">Số ngày vắng :
          <input name="vang" type="text" id="vang" size="5" value="<?php echo $songayvang; ?>" />
          </div>
          </div>
          </label>
        </td>
        <td colspan="2" bgcolor="#FFFFE1" class="style17">
          Số sản phẩm:
          <input name="sp" type="text" id="sp" size="5" value="<?php echo $sosanpham; ?>" />
          Tăng ca:
          <label>
            <input name="tang_ca" type="radio" value="1" <?php if ($tangca  == '1') echo "checked='checked'"; ?>/>
            Có</label>
          <label>
            <input type="radio" name="tang_ca" value="0" <?php if ($tangca  == '0') echo "checked='checked'"; ?>/>
            Không</label>
        </td>
      </tr>
      <tr>
        <td><span class="style17">Tiền lương: </span></td>
        <td><span class="style17">
            <label>
              <input name="luong" type="text" id="luong" value="<?php echo $tienluong; ?>" size="20" readonly="true" />
            </label>
          </span></td>
        <td><span class="style17">Trợ cấp: </span></td>
        <td><span class="style17">
            <label>
              <input name="tro_cap" type="text" id="tro_cap" value="<?php echo $trocap; ?>" size="20" readonly="true" />
            </label>
          </span></td>
      </tr>
      <tr>
        <td colspan="4" align="center" class="style17">Thực lĩnh:
          <label>
            <input name="thuc_linh" type="text" id="thuc_linh" readonly="true" value="<?php echo $thuclinh; ?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td height="25" colspan="4" align="center" bgcolor="#FFCC66">
          <input type="submit" name="Submit" value="Tính lương" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
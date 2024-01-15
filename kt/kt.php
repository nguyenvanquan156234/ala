<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .form-group label {
            flex: 1;
        }

        .form-group input[type="text"] {
            flex: 2;
        }

        .form-group input[type="text"][readonly] {
            background-color: #f8f9fa;
        }
    </style>
    <title>Tính tiền nước hàng tháng</title>
</head>

<body>
    <?php
    class WaterBill
    {
        public $khachhang;
        public $nhankhau;
        public $cu;
        public $moi;
        public $tieuthu;
        public $dinhmuc;
        public $vuot;
        public $loaikhachhang;


        public function __construct($khachhang, $nhankhau, $cu, $moi, $tieuthu, $dinhmuc, $vuot, $loaikhachhang)
        {
            $this->khachhang = $khachhang;
            $this->nhankhau = $nhankhau;
            $this->cu = $cu;
            $this->moi = $moi;
            $this->tieuthu = $tieuthu;
            $this->dinhmuc = $dinhmuc;
            
            $this->loaikhachhang = $loaikhachhang;
        }
        public function getKhachHang()
        {
            return $this->khachhang;
        }

        public function setKhachHang($khachhang)
        {
            $this->khachhang = $khachhang;
        }

        public function getNhanKhau()
        {
            return $this->nhankhau;
        }

        public function setNhanKhau($nhankhau)
        {
            $this->nhankhau = $nhankhau;
        }

        public function getCu()
        {
            return $this->cu;
        }

        public function setCu($cu)
        {
            $this->cu = $cu;
        }

        public function getMoi()
        {
            return $this->moi;
        }

        public function setMoi($moi)
        {
            $this->moi = $moi;
        }

        public function getMetKhoi()
        {
            return $this->tieuthu;
        }

        public function setMetKhoi($metkhoi)
        {
            $this->tieuthu = $metkhoi;
        }

        public function getDinhMuc()
        {
            return $this->dinhmuc;
        }

        public function setDinhMuc($dinhmuc)
        {
            $this->dinhmuc = $dinhmuc;
        }

        public function getVuot()
        {
            return $this->vuot;
        }

        public function setVuot($vuot)
        {
            $this->vuot = $vuot;
        }

        public function getLoaiKhachHang()
        {
            return $this->loaikhachhang;
        }

        public function setLoaiKhachHang($loaikhachhang)
        {
            $this->loaikhachhang = $loaikhachhang;
        }




        public function tieuthu()
        {
            if($this->getMoi() > $this->getCu() ){
                return $this->getMoi() - $this->getCu() ;
            }else{
                return 0;
            }
        }
        public function tiensudung()
        {
            if ($this->tieuthu() <= $this->getDinhMuc()) {
                return $this->tieuthu() * 4000;
            } else {

                $kt = $this->getDinhMuc() * 4000;
                $v = ($this->tieuthu() - $this->getDinhMuc()) * 8000;
                return $kt + $v;
            }
        }
        public function vuott(){
          return  $this->tieuthu()- $this->getDinhMuc();
        }
        public function phimoitruong()
        {
            return $this->TienSuDung() * 0.1;
        }

        public function tongtien()
        {
            return $this->tiensudung() + $this->phimoitruong();
        }
        
    public function hienthi()
    {
        echo "Khách hàng: " . $this->khachhang . "<br>";
        echo "Số nhân khẩu: " . $this->nhankhau . "<br>";
        echo "Tổng mét khối sử dụng: " . $this->tieuthu() . "<br>";
        echo "Trong định mức: " . $this->dinhmuc . "<br>";
        echo "Vượt định mức: " . $this->vuott() . "<br>";
        echo "Loại khách hàng: " . implode(", ", $this->loaikhachhang) . "<br>";
        echo "Tiền sử dụng: " . $this->tiensudung() . "<br>";
        echo "Phí bảo vệ môi trường 10%: " . $this->phimoitruong() . "<br>";
        echo "Tổng tiền phải trả: " . $this->tongtien() . "<br>";
    }
    }
    $khachhang = '';
    $nhankhau = '';
    $cu = 0;
    $moi = 0;
    $tieuthu = 0;
    $dinhmuc = 0;
    $vuot = 0;
    $tiensudung = 0;
    $moitruong = 0;
    $tongtien = 0;
    $loaikhachhang=array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $khachhang = $_POST["khachhang"];
        $nhankhau = $_POST["nhankhau"];
        $cu = $_POST["cu"];
        $moi = $_POST["moi"];
        $metkhoi = $_POST["tieuthu"];
        $dinhmuc = $_POST["dinhmuc"];
        $vuot = $_POST["vuot"];
        $loaikhachhang = isset($_POST["loaikhachhang"]) ? $_POST["loaikhachhang"] : [];

        if (isset($nhankhau) && $nhankhau < 4) {
            $dinhmuc = 12;
        } else {
            $dinhmuc = $_POST["dinhmuc"];
        }
      
        $waterBill = new WaterBill($khachhang, $nhankhau, $cu, $moi, $tieuthu, $dinhmuc, $vuot, $loaikhachhang);


        $khachhang = $waterBill->khachhang;
        $nhankhau = $waterBill->nhankhau;
        $cu = $waterBill->cu;
        $moi = $waterBill->moi;
        $tieuthu = $waterBill->tieuthu();
        $dinhmuc = $waterBill->dinhmuc;
        $vuot = $waterBill->vuott();
        

        $tiensudung = $waterBill->tiensudung();
        $moitruong = $waterBill->phimoitruong();
        $tongtien = $waterBill->tongtien();
  

      
      

    }
    ?>
    <div class="container mt-4">
        <form action="" method="post">
            <h1 class="mb-4 text-danger text-center">Tính tiền nước hàng tháng</h1>
            <div class="form-group">
                <label for="customer">Khách hàng</label>
                <input type="text" class="form-control" id="customer" name="khachhang" value="<?php echo $khachhang ?>">
            </div>
            <div class="form-group">
                <label for="population">Số nhân khẩu</label>
                <input type="text" class="form-control" id="population" name="nhankhau" value="<?php echo $nhankhau ?>">
            </div>
            <div class="form-group">
                <label for="prevReading">Chỉ số cũ</label>
                <input type="text" class="form-control" id="prevReading" name="cu" value="<?php echo $cu ?>">
                <label for="currReading">Chỉ số mới</label>
                <input type="text" class="form-control" id="currReading" name="moi" value="<?php echo $moi ?>">
                <label for="consumedVolume">Tiêu thụ mét khối</label>
                <input type="text" class="form-control" id="tieuthu" name="tieuthu" value="<?php echo $tieuthu ?>" readonly>
            </div>
            <div class="form-group">
                <label for="inLimit">Số mét khối tiêu thụ trong định mức</label>
                <input type="text" class="form-control" id="" name="dinhmuc" value="<?php echo $dinhmuc ?>">
            </div>
            <div class="form-group">
                <label for="overLimit">Số mét khối vượt định mức</label>
                <input type="text" class="form-control" id="overLimit" name="vuot" value="<?php echo $vuot ?>" readonly>
            </div>
            <div class="form-group">
                <label for="customerType">Loại khách hàng</label>
                <select name="loaikhachhang[]" class="form-select" multiple>
                    <option value="Kinh doanh" <?php if (in_array('Kinh doanh', $loaikhachhang)) echo 'selected'; ?>>kinh doanh</option>
                    <option value="Gia Đình" <?php if (in_array('Gia đình', $loaikhachhang)) echo 'selected'; ?>>Gia Đình</option>


                    <option value="Sản Xuất" <?php if (in_array('Sản xuất', $loaikhachhang)) echo 'selected'; ?>>Sản xuất</option>
                </select>
            </div>
            <div class="form-group">
                <label for="usageCost">Tiền sử dụng</label>
                <input type="text" class="form-control text-primary" id="usageCost" name="tiensuung" readonly value="<?php echo $tiensudung ?>">
            </div>
            <div class="form-group">
                <label for="environmentalFee">Phí bảo vệ môi trường 10%</label>
                <input type="text" class="form-control text-warning" id="environmentalFee" name="moitruong" readonly value="<?php echo $moitruong ?>">
            </div>
            <div class="form-group">
                <label for="totalCost">Tổng tiền phải trả</label>
                <input type="text" class="form-control text-danger" id="totalCost" name="tongtien" readonly value="<?php echo $tongtien ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Tính">
            <div class="result-container" style="text-align: center; background-color: yellow; padding: 10px; border: 1px solid black;"> <?php
                if (isset($waterBill)) $waterBill->hienThi();
            ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
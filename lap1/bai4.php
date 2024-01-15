<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<!-- code tại đây --><?php
    $kq='';
    $dtb='';
    $xl='';

    if(isset($_POST['diem1']) &&isset($_POST['diem2']) ){
        $d1 = $_POST['diem1'];
        $d2 = $_POST['diem2'];
        $dtb = round(($d1 + $d2*2)/3,1);
        
        if($dtb >= 5){
            $kq = 'Được Lên Lớp';
        }else{
            $kq= 'Ở lại cho chừa';
        }
        if($dtb >=8){
            $xl='Giỏi';
        }else if($dtb>6.5 && $dtb<8){
            $xl='khá';
        }else if($dtb >=5 && $dtb <6.5){
            $xl='Trung bình';
        }else{
            $xl='Yếu';
        }
    }
?>
<form action="" method="post" name="form1" id="form1">
  <table width="360" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#5DC0F0">
    <tbody>
      <tr>
        <td colspan="2" align="center" style="color: #F7070B">KẾT QUẢ HỌC TẬP</td>
      </tr>
      <tr>
        <td width="110">Điểm HK1</td>
        <td width="243"><input type="text" name="diem1" id="diem1" value="<?php echo $d1 ?>"></td>
      </tr>
      <tr>
        <td>Điểm HK2</td>
        <td><input type="text" name="diem2" id="diem2" value= "<?php echo $d2 ?>"></td>
      </tr>
      <tr>
        <td>Điểm TB</td>
        <td><input name="diemtb" type="text" id="diemtb" readonly="readonly" value="<?php echo $dtb ?>"></td>
      </tr>
      <tr>
        <td>Kết quả</td>
        <td><input name="ketqua" type="text" id="ketqua" readonly="readonly" value="<?php echo $kq ?>"></td>
      </tr>
      <tr>
        <td>Xếp loại học lực</td>
        <td><input  name="xeploai" type="text" id="xeploai" readonly="readonly" value="<?php echo $xl ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Xếp Loại"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
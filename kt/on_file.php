<!doctype html>
<html>

<head>
    <?php

    ?>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body>
    <?php
    $hinh = '';
    $tien = 0;
    $tour = '';
    $ngay = '';
    $soluong = 0;
    $tenkh = '';
    $dc = '';
    $sdt = '';
    $thanhtien = 0;
    $mangtour = array('Thái Lan' => 5000000, 'Singapore' => 8000000, 'Hàn quốc' => 14000000, 'Đài Loan' => 7000000);
    $manghinh = array('Thái Lan' => 'thailan.jpg', 'Singapore' => 'singapore.jpg', 'Hàn quốc' => 'hanquoc.jpg', 'Đài Loan' => 'dailoan.jpg');
    if (isset($_POST['submit'])) {
        $tour = $_POST['tour'];
        $ngay = $_POST['ngay'];
        $soluong = $_POST['soluong'];
        $tenkh = $_POST['tenkhach'];
        $dc = $_POST['diachi'];
        $sdt = $_POST['dienthoai'];
    }
    ?>

    <form action="on2.php" method="post" name="form1" id="form1">
        <table width="600" border="0" align="center" cellpadding="1" cellspacing="1">
            <tbody>
                <tr>
                    <td colspan="2" align="center" bgcolor="#17335A" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color: #F5E6E7; font-weight: bold;">ĐĂNG KÝ TOUR DU LỊCH</td>
                </tr>
                <tr>
                    <td width="173" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Tên tour</td>
                    <td width="420" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
                        <select name="tour" id="tour">
                            <?php
                            $selectchon = '';
                            if (isset($_POST['tour'])) {
                                $selectchon = $_POST['tour'];
                                foreach ($manghinh as $key => $value) {
                                    if ($key == $selectchon)
                                        $hinh = $value;
                                }
                                foreach ($mangtour as $key => $value) {
                                    if ($key == $selectchon)
                                        $tien = $value;
                                }
                            }
                            ?>
                            <?php
                            foreach ($manghinh as $key => $value) :


                            ?>
                                <option value="<?php echo $key ?>"><?php echo $key ?></option>
                            <?php
                            endforeach;


                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Ngày khởi hành:</td>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="ngay" id="ngay" value="<?php echo $ngay; ?>"></td>
                </tr>

                <tr>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Số lượng đăng ký:</td>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="soluong" id="soluong"></td>
                </tr>
                <tr>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Tên khách hàng:</td>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="tenkhach" id="tenkhach"></td>
                </tr>
                <tr>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Liên hệ theo địa chỉ:</td>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="diachi" id="diachi"></td>
                </tr>
                <tr>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Số điện thoại</td>
                    <td bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif"><input type="text" name="dienthoai" id="dienthoai"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">Hiển thị hình:</td>
                </tr>
                <tr>
                    <td colspan="2" align="center" bgcolor="#A8C8F5" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
                        <img src="./hinh_anh/<?php echo $hinh ?>" alt="Girl in a jacket" width="280" height="80">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Đăng Ký Tour"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
    $thanhtien = $soluong * $tien;
    $khachhang = "$tenkh-$dc-$sdt-$tour-$tien-$soluong-$thanhtien-$hinh";

    $myFile = fopen("on_file.txt", "a") or die("Unable to open file");
    fwrite($myFile, $khachhang);
    fclose($myFile);
    ?>

    <table class="table" align="center" cellspacing="0" border="1">
        <tr>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Tour</th>
            <th>Giá</th>
            <th>Số khách</th>
            <th>Thành tiền</th>
            <th>Hình</th>
        </tr>
        <?php
        if (file_exists("on_file.txt")) {
            $dongs = file("on_file.txt");
            foreach ($dongs as $dong) {
                $dulieu = explode("-", $dong);
        ?>
                <tr>
                    <td><?php echo $dulieu[0]; ?></td>
                    <td><?php echo $dulieu[1]; ?></td>
                    <td><?php echo $dulieu[2]; ?></td>
                    <td><?php echo $dulieu[3]; ?></td>
                    <td><?php echo $dulieu[4]; ?></td>
                    <td><?php echo $dulieu[5]; ?></td>
                    <td><?php echo $dulieu[6]; ?></td>
                    <td>
                        <img src="./hinh_anh/<?php echo $dulieu[7]; ?>" alt="">
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

</body>

</html>
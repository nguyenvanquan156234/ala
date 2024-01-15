<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form-login{
            width: 500px;
            height: auto;
            background: #fff1f1;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            text-align: center;
            margin: 0 0 10px 0;
        }
        input[type="text"]{
            border-radius: 5px;
            margin-bottom: 7px;
            border: 1px solid #ddd;
            
        }
        .inp{
            width: 72px;
            height: 35px;
        }
        .form-items{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        input[type="submit"]{
            padding: 9px 20px;
            color: #fff;
            border-radius: 5px;
            border: 1px solid #9eb3ff;
            background: #9eb3ff;
            text-transform: uppercase;
            cursor: pointer;
        }
        .submit-button{
            display: flex;
            justify-content: flex-end;
        }
</style>
<body>
<?php
     
        if(isset($_REQUEST['ngay']) && isset($_REQUEST['thang']) && isset($_REQUEST['nam'])){
            $d=$_REQUEST['ngay'];
            $m=$_REQUEST['thang'];
            $y=$_REQUEST['nam'];
            $ht = date("0-m-d");
            //đổi ngày  hiện tại và ngày sinh nhật về giá trị số
            $ngayht =strtotime($ht);
            $sn = mktime(0,0,0,$m,$d,0);
            $kc = $ngayht -$sn;

            if($kc <0 ){
                $kq = " còn ".floor(abs($kc) / (3600 * 24)) ." ngày đến sinh nhật";
            }elseif ($kc > 0){
                $kq = " ngày sinh nhật đã qua ".floor(abs($kc) / (3600 * 24)) ." ngày";
            }else{
                $kq = " chúc mừng sinh nhật";
            }
            $tuoi = date("Y") - $y;
            $chuoi = "năm nay bạn đã $tuoi rồi ";
        }
       
   ?>
<div class="form-login">
        <div class="form-login-item">
            <h2 >NGÀY SINH</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-items">
                    <label for="">Ngày/Tháng/Năm:</label>
                    <input class="inp" type="text" name="ngay" size="2" value="<?php echo $d ?>">
                    <label for="">/</label>
                    <input class="inp" type="text" name="thang" size="2"  value="<?php echo $m ?>">
                    <label for="">/</label>
                    <input class="inp" type="text" name="nam" size="2"  value="<?php echo $y ?>">
                </div>
            
                <div class="form-items">
                    
                   <!-- <input type="text" size="49" width= "372px"  name="thanhtoan" readonly="true" style="background-color:#FFCCCC" value="<?php echo $chuoi;?>"> -->
                   <span>hiển thị kết quả đây</span>
                   
                </div>
                <div class="submit-button">
                    <input type="submit" value=" <?php echo $chuoi;
                        echo $kq;
                    ?>">
                </div>
            </form>


        </div>
    </div>
</body>
</html>
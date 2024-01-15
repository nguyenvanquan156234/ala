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
            width: 372px;
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
            if(isset($_REQUEST['chuoi1']) && isset($_REQUEST['chuoi2'])){
                $c1 = $_REQUEST['chuoi1'];
                $c2 = $_REQUEST['chuoi2'];
            }
            $kq = strcmp($c1,$c2);
            if($kq == 0 ){
                $kq = ' giống nhau';

            }else if ($kq > 0){
                $kq = 'dài hơn';
            }else{
                $kq = 'ngắn hơn';
            }
        ?>
<div class="form-login">
        <div class="form-login-item">
            <h2>SO SÁNH CHUỖI</h2>
            <form action="sosanhchuoi.php" method="POST">
                <div class="form-items">
                <label for="">Chuỗi thứ nhất:</label>
                    <input type="text" name="chuoi1" value="<?php echo $c1?>">
                </div>
                <div class="form-items">
                    <label for="">Chuỗi thứ hai:</label>
                    <input type="text" name="chuoi2" value="<?php echo $c2?>">
                </div>
                
                <div class="form-items">
                   
                    <input type="text" name="thanhtoan" readonly="true" style="background-color:#FFCCCC" value="<?php echo $kq?>">
                    
                </div>
                <div class="submit-button">
                    <input type="submit" value="So Sánh">
                </div>
            </form>


        </div>
    </div>
</body>
</html>
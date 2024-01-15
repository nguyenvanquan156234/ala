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
    <!-- code tại đây -->
<div class="form-login">
        <div class="form-login-item">
            <h2>TÌM NĂM NHUẬN</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-items">
                    <label for="">Năm :</label>
                    <input type="text" name="nam" size="2" value="">
                </div>
                <div class="form-items">
                    <input type="text" name="thanhtoan" readonly="true" style="background-color:#FFCCCC" value="">
                   
                </div>
            
               
                <div class="submit-button">
                    <input type="submit" value="Tìm Năm Nhuận">
                </div>
               
                 
            </form>


        </div>
    </div>
</body>
</html>
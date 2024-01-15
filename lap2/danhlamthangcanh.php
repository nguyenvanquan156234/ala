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
            width: 700px;
            height: auto;
            background: #fff1f1;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        img{
            width:300px;
            height:300px;
        }
        
</style>
<body>
    <?php
        
    ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="form-login">
    <table border="1" width="600px">
    <caption style="caption-side: top; font-size:20px; color:red"><h1><b>DANH LAM THẮNG CẢNH</b></h1></caption>
    <tr>
        <td id="top">
            <b>Danh sách địa danh</b>
            
        </td>
        <td id="lây id đây" rowspan="2">hiển thị nội dung</td>
       
    </tr>
    <tr >
        <td rowspan="2" >hiển thị đây</td>
        <!-- <td>Abc2</td> -->
       
    </tr>
    
</table>
    </form>
</body>
</html>
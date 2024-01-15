<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="get">
    <h2>In lời chào</h2>
    <input type="text" name="txtname">
    <p>
        <?php    
        if(isset($_GET['txtname'])){
            echo 'Chào bạn ' . $_GET['txtname'];
        }
        ?>
    </p>
    <br>
    <br>
    
    <input type="submit" value="Chào" name="kq">
    
</body>
</html>
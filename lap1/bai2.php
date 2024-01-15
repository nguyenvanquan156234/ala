<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-login {
            width: 500px;
            height: auto;
            background: #fff1f1;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            text-align: center;
            margin: 0 0 10px 0;
        }

        input[type="text"] {
            border-radius: 5px;
            margin-bottom: 7px;
            border: 1px solid #ddd;
            width: 372px;
            height: 35px;
        }

        .form-items {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        input[type="submit"] {
            padding: 9px 20px;
            color: #fff;
            border-radius: 5px;
            border: 1px solid #9eb3ff;
            background: #9eb3ff;
            text-transform: uppercase;
            cursor: pointer;
        }

        .submit-button {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>

<body>
    <div class="form-login">
        <div class="form-login-item">
            <h2>ĐỊNH DẠNG MÀU NỀN MÀU CHỮ</h2>
            <form action="" method="POST">
                <div class="form-items">
                    <label for="">Nội Dung:</label>
                    <input type="text" name="noidung">
                </div>
                <div class="form-items">
                    <label for="">Màu Nền:</label>
                    <input type="text" name="maunen">
                </div>
                <div class="form-items">
                    <label for="">Màu Chữ:</label>
                    <input type="text" name="mauchu">
                </div>
                <div class="submit-button">
                    <input type="submit" value="Xem Kết Quả">
                </div>
            </form>

            <p>Sau khi nhấn Xem kết quả</p>
            <?php
            if (isset($_POST['noidung']) && isset($_POST['maunen']) && isset($_POST['mauchu'])) {
                $noidung = $_POST['noidung'];
                $maunen = $_POST['maunen'];
                $mauchu = $_POST['mauchu'];
                echo '<div style="background-color: ' . $maunen . '; color: ' . $mauchu . ';">' . $noidung . '</div>';
            }
            ?>
            <table width="500px" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor=<?php echo $maunen?> >
                <tr>
                    <td>
                        <font color=<?php echo $mauchu?>>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
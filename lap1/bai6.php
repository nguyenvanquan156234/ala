<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

<body>
    <!-- CODE TẠI ĐÂY -->
    <?php
    $dl = 0;

    $tt = '';

    $can = '';

    $chi = '';

    $so_du_can = 0;

    $so_du_chi = 0;

    if (isset($_POST['duonglich'])) {

        $dl = $_POST['duonglich'];

        $so_du_can = ($dl - 3) % 10;

        $so_du_chi = ($dl - 3) % 12;
    }

    switch ($so_du_can) {

        case 0:

            $can = 'Quý';

            break;

        case 1:

            $can = 'Giáp';

            break;

        case 2:

            $can = 'Ất';

            break;

        case 3:

            $can = 'Bính';

            break;

        case 4:

            $can = 'Đinh';

            break;

        case 5:

            $can = 'Mậu';

            break;

        case 6:

            $can = 'Kỷ';

            break;

        case 7:

            $can = 'Canh';

            break;

        case 8:

            $can = 'Tân';

            break;

        case 9:

            $can = 'Nhâm';

            break;
    }

    switch ($so_du_chi) {

        case 0:

            $chi = 'Hợi';

            break;

        case 1:

            $chi = 'Tý';

            break;

        case 2:

            $chi = 'Sửu';

            break;

        case 3:

            $chi = 'Dần';

            break;

        case 4:

            $chi = 'Mão';

            break;

        case 5:

            $chi = 'Thìn';

            break;

        case 6:

            $chi = 'Tỵ';

            break;

        case 7:

            $chi = 'Ngọ';

            break;

        case 8:

            $chi = 'Mùi';

            break;

        case 9:

            $chi = 'Thân';

            break;

        case 10:

            $chi = 'Dậu';

            break;

        case 11:

            $chi = 'Tuất';

            break;
    }

    $nam_al = $can . ' ' . $chi;
    ?>
    <div class="form-login">
        <div class="form-login-item">
            <h2>TÍNH NĂM ÂM LỊCH</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-items">
                    <label for="">Năm dương lịch:</label>
                </div>
                <div class="form-items">
                    <input type="text" name="duonglich" size="2" value=" <?php echo $dl ?>">
                </div>


                <div class="submit-button">
                    <input type="submit" value="=>">
                </div>
                <div class="form-items">
                    <label for="">Năm âm lịch:</label>
                </div>
                <div class="form-items">
                    <input type="text" name="thanhtoan" readonly="true" style="background-color:#FFCCCC" value="<?php echo $nam_al ?>">

                </div>
            </form>

            `
        </div>
    </div>
</body>

</html>
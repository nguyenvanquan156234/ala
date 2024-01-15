<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký Học Phần Online</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <script>
        function validateMaSV() {
            var maSV = document.getElementById('maSV').value;
            var isValid = /^\d{9}$/.test(maSV);

            if (!isValid) {
                alert('Mã sinh viên phải có 9 chữ số (0-9).');
                return false;
            }

            return true;
        }
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['maSV'] = $_POST['maSV'];
        $_SESSION['hoTen'] = $_POST['hoTen'];
        $rawDateOfBirth = $_POST['ngaySinh'];
        $dateOfBirth = date('d-m-Y', strtotime($rawDateOfBirth));


        if (!validateDate($dateOfBirth)) {
            echo "Invalid date of birth!";
        } else {
            $_SESSION['ngaySinh'] = $dateOfBirth;
        }
        $_SESSION['chuyenNganh'] = $_POST['chuyenNganh'];
        $_SESSION['namHoc'] = $_POST['namHoc'];
        $_SESSION['monHoc'] = $_POST['monHoc'];
        $_SESSION['bacDaoTao'] = isset($_POST['bacDaoTao']) ? $_POST['bacDaoTao'] : '';
        $_SESSION['lopHoc'] = $_POST['lopHoc'];
        $_SESSION['loaiHinhDaoTao'] = $_POST['loaiHinhDaoTao'];
        $_SESSION['noiSinh'] = $_POST['noiSinh'];
        $_SESSION['nganhDaoTao'] = $_POST['nganhDaoTao'];
        $_SESSION['hocKy'] = $_POST['hocKy'];
        $_SESSION['lopHocPhan'] = $_POST['lopHocPhan'];
    }
    function validateDate($date)
    {
        $d = DateTime::createFromFormat('d-m-Y', $date);
        return $d && $d->format('d-m-Y') === $date;
    }
    ?>
    <div class="container mt-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateMaSV();">
            <h1 class="mb-4">Đăng ký Học Phần Online</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="maSV" class="form-label">Mã sinh viên</label>
                        <input type="text" class="form-control" id="maSV" name="maSV">
                    </div>

                    <div class="mb-3">
                        <label for="hoTen" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" id="hoTen" name="hoTen">
                    </div>

                    <div class="mb-3">
                        <label for="ngaySinh" class="form-label">Ngày sinh</label>
                        <input type="text" class="form-control" id="ngaySinh" name="ngaySinh">
                    </div>

                    <div class="mb-3">
                        <label for="chuyenNganh" class="form-label">Chuyên ngành</label>
                        <select class="form-select" id="chuyenNganh" name="chuyenNganh">
                            <?php
                            // Array of major options
                            $majorOptions = array(
                                'Hệ thống thông tin' => 'Hệ thống thông tin',
                                'Quản Trị Mạng' => 'Quản Trị Mạng',
                                'Thiết kế đồ họa' => 'Thiết kế đồ họa'
                                // Add more options as needed
                            );

                            // Generate options dynamically
                            foreach ($majorOptions as $value => $label) {
                                echo '<option value="' . $value . '">' . $label . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="namHoc" class="form-label">Năm học</label>
                        <input type="text" class="form-control" id="namHoc" name="namHoc">
                    </div>

                    <div class="mb-3">
                        <label for="monHoc" class="form-label">Môn học</label>
                        <select class="form-select" id="monHoc" name="monHoc">
                            <option value="">Chọn môn học</option>

                            <?php
                            // Array of subject options
                            $subjectOptions = array(
                                'PHP' => 'PHP 1',
                                'JavaScript' => 'JavaScript',
                                'CCNA1' => 'CCNA 1',
                                'CCNA2' => 'CCNA 2',
                                'Corel' => 'Corel',
                                'Photoshop' => 'Photoshop'
                                // Add more options as needed
                            );

                            // Generate options dynamically
                            foreach ($subjectOptions as $value => $label) {
                                echo '<option value="' . $value . '">' . $label . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bậc đào tạo</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bacDaoTao" id="caoDang" value="CaoDang">
                            <label class="form-check-label" for="caoDang">Cao Đẳng</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bacDaoTao" id="trungCap" value="trungCap">
                            <label class="form-check-label" for="trungCap">Trung Cấp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bacDaoTao" id="lienThong" value="lienThong">
                            <label class="form-check-label" for="lienThong">Liên Thông</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lopHoc" class="form-label">Lớp học</label>
                        <input type="text" class="form-control" id="lopHoc" name="lopHoc">
                    </div>

                    <div class="mb-3">
                        <label for="loaiHinhDaoTao" class="form-label">Loại hình đào tạo</label>
                        <input type="text" class="form-control" id="loaiHinhDaoTao" name="loaiHinhDaoTao">
                    </div>

                    <div class="mb-3">
                        <label for="noiSinh" class="form-label">Nơi Sinh</label>
                        <input type="text" class="form-control" id="noiSinh" name="noiSinh">
                    </div>

                    <div class="mb-3">
                        <label for="nganhDaoTao" class="form-label">Ngành đào tạo</label>
                        <select class="form-select" id="nganhDaoTao" name="nganhDaoTao">
                            <option value="">Chọn ngành</option>

                            <?php
                            // Array of field of study options
                            $fieldOptions = array(
                                'CNTT1' => 'Công nghệ Thông Tin',
                                'Anroid' => 'Lập trình Android',
                                'CMS' => 'CMS'
                                // Add more options as needed
                            );

                            // Generate options dynamically
                            foreach ($fieldOptions as $value => $label) {
                                echo '<option value="' . $value . '">' . $label . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="hocKy" class="form-label">Học kỳ</label>
                        <select class="form-select" id="hocKy" name="hocKy">
                            <?php
                            // Array of subject options
                            $subjectOptions1 = array(
                                '1' => '1',
                                '2' => '2',
                                '3' => '3',

                                // Add more options as needed
                            );

                            // Generate options dynamically
                            foreach ($subjectOptions1 as $value => $label) {
                                echo '<option value="' . $value . '">' . $label . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="lopHocPhan" class="form-label">Lớp học phần</label>
                        <select class="form-select" id="lopHocPhan" name="lopHocPhan">
                            <?php
                            // Array of subject options
                            $subjectOptions2 = array(
                                'Nhóm 1' => 'Nhóm 1',
                                'Nhóm 2' => 'Nhóm 2',
                                'Nhóm 3' => 'Nhóm 3',

                                // Add more options as needed
                            );

                            // Generate options dynamically
                            foreach ($subjectOptions2 as $value => $label) {
                                echo '<option value="' . $value . '">' . $label . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Mã SV</th>
                    <th>Họ tên</th>
                    <th>Ngày Sinh</th>
                    <th>Lớp</th>
                    <th>Chuyên ngành</th>
                    <th>Ngành Đào tạo</th>
                    <th>Môn học</th>
                    <th>Học Kỳ</th>
                    <th>Lớp Học phần</th>
                    <th>Bậc đào tạo</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your student information rows dynamically here -->
                <!-- Example row -->
                <tr>
                    <td><?php echo isset($_SESSION['maSV']) ? $_SESSION['maSV'] : ''; ?></td>
                    <td><?php echo isset($_SESSION['hoTen']) ? $_SESSION['hoTen'] : ''; ?></td>
                    <td><?php
                        if (isset($_SESSION['ngaySinh']) && validateDate($_SESSION['ngaySinh'])) {
                            echo $_SESSION['ngaySinh'];
                        } else {
                            echo 'Ngày sinh sai';
                        }
                        ?></td>
                    <td><?php echo isset($_SESSION['lopHoc']) ? $_SESSION['lopHoc'] : ''; ?></td>
                    <td><?php echo isset($_SESSION['chuyenNganh']) ? $_SESSION['chuyenNganh'] : ''; ?></td>
                    <td><?php echo isset($_SESSION['nganhDaoTao']) ? $_SESSION['nganhDaoTao'] : ''; ?></td>
                    <td><?php echo isset($_SESSION['monHoc']) ? $_SESSION['monHoc'] : ''; ?></td>
                    <td><?php echo isset($_SESSION['hocKy']) ? $_SESSION['hocKy'] : ''; ?></td>
                    <td><?php echo isset($_SESSION['lopHocPhan']) ? $_SESSION['lopHocPhan'] : ''; ?></td>
                    <td>
                        <?php

                        if (isset($_SESSION['bacDaoTao'])) {
                            switch ($_SESSION['bacDaoTao']) {
                                case 'CaoDang':
                                    echo 'Cao Đẳng';
                                    break;
                                case 'trungCap':
                                    echo 'Trung Cấp';
                                    break;
                                case 'lienThong':
                                    echo 'Liên Thông';
                                    break;
                                default:
                                    echo '';
                            }
                        } else {
                            echo '';
                        }
                        ?></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional, only needed if you are using Bootstrap JS components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
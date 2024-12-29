<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet" href="../CSS/dangky.css"/>
      <script src="../JS/dangky.js"></script>
    <title>DogCatShop</title>
    <link rel="icon" href="../Image/logo1.png" type="image/x-icon" />
</head>
<body>
    <div id="wapper">
        <form action="" id="form-dangky" method="post">

        <?php
            include("../admin/config.php");

            if (isset($_POST['dangky'])) {
                $hoten = trim($_POST['hoten']);
                $sdt = trim($_POST['sdt']);
                $email = trim($_POST['email']);
                $mk = trim($_POST['mk']);

                // Kiểm tra các trường không được để trống
                if (empty($hoten) || empty($sdt) || empty($email) || empty($mk)) {
                    echo "<div class='message'><p>Vui lòng nhập đầy đủ thông tin!</p></div>";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Kiểm tra định dạng email
                    echo "<div class='message'><p>Email không hợp lệ!</p></div>";
                } elseif (!preg_match('/^[0-9]{10,15}$/', $sdt)) {
                    // Kiểm tra số điện thoại hợp lệ (10-15 chữ số)
                    echo "<div class='message'><p>Số điện thoại không hợp lệ!</p></div>";
                } else {
                    // Kiểm tra email đã tồn tại
                    $verify_query = mysqli_query($con, "SELECT email FROM taikhoan WHERE email='$email'");
                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'><p>Email đã được sử dụng, hãy thử đăng ký bằng email khác!</p></div>";
                    } else {
                        // Thêm dữ liệu vào bảng taikhoan
                        $stmt = $con->prepare("INSERT INTO taikhoan (hoten, sdt, email, mk) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param("ssss", $hoten, $sdt, $email, $mk);

                        if ($stmt->execute()) {
                            echo "<div class='message'><p>Đăng ký thành công!</p></div>";
                        } else {
                            echo "<div class='message'><p>Lỗi: " . $stmt->error . "</p></div>";
                        }
                        $stmt->close();

                    }
                }
            } else {
        ?>


            <h1 class="form-heading">Đăng ký</h1>
            
            <div class="input-fieldfield">
                <label for="hoten"><b>Họ tên</b></label>
                <input id="hoten" type="text" name="hoten" placeholder="Nhập họ tên"/>
            </div>

            <div class="input-fieldfield">
                <label for="sdt"><b>Số điện thoại</b></label>
                <input id="sdt" type="text" name="sdt" placeholder="Nhập số điện thoại"/>
            </div>

            <div class="input-fieldfield">
                <label for="email"><b>Email</b></label>
                <input id="email" type="email" name="email" placeholder="Nhập email"/>
            </div>

            <div class="input-fieldfield">
                <label for="mk"><b>Mật khẩu</b></label>
                <input id="mk" type="password" name="mk" placeholder="Nhập mật khẩu"/>
            </div>

            <div class="clearfix">
                    <button type="button" name="huybo" class="cancelbtn">Hủy bỏ</button>
                    &nbsp;&nbsp;
                    <button type="submit" name="dangky" class="signupbtn">Đăng ký</button>
            </div>
            <?php } ?>
        </form>
       
    </div>
</body>
</html>

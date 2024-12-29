<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet" href="../CSS/trangchu.css"/>
    <title>admin</title>
</head>
<body>
    <div class="row mb">
        <div class="boxh1">
                <h1>DỊCH VỤ CỦA CHÚNG TÔI</h1>
            </div>

            <div class="boxtrai mr">
                <div class="row">
                    <div class="boxdv mr">
                        <img src="../Image/Chăm sóc sắc đẹp/tai-sao-meo-chai-long-thuong-xuyen.jpg" width="400" height="230" alt="">
                        <div class="name">Dịch vụ 1</div>
                        <div class="desc"><a href="../admin/chamsocsacdep.php">Chăm sóc sắc đẹp</a></div>
                    </div>
                    <div class="boxdv mr">
                        <img src="../Image/Chăm sóc sức khỏe/dich-vu-cham-soc-thu-cung-1.png" width="400" height="230" alt="">
                        <div class="name">Dịch vụ 2</div>
                        <div class="desc"><a href="../admin/chamsocsuckhoe.php">Chăm sóc sức khỏe</a></div>
                    </div>
                    <div class="boxdv mr">
                        <img src="../Image/Dịch vụ lưu trú/5khach-san-thu-cung-16744475436651686650816.webp" width="400" height="230" alt="">
                        <div class="name">Dịch vụ 3</div>
                        <div class="desc"><a href="../admin/dichvuluutru.php">Lưu trú</a></div>
                    </div>
                    <div class="boxdv mr">
                        <img src="../Image/Huấn luyện/huan-luyen-meo-bat-tay2-600x400-1.webp" width="400" height="230" alt="">
                        <div class="name">Dịch vụ 4</div>
                        <div class="desc"><a href="../admin/huanluyen.php">Huấn luyện</a></div>
                    </div>
                </div>
            </div>

            <div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle"><b>TÀI KHOẢN</b></div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post" id="loginForm">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="hoten" id="hoten">
                            </div>

                            <div class="row mb10">
                                Mật khẩu<br>
                                <input type="password" name="mk" id="mk">
                            </div>

                            <div class="row mb10">
                                <input type="checkbox" name="" id="remember"> Ghi nhớ tài khoản?
                            </div>

                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                            <li>
                                <a href="#">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="dangky.php">Đăng ký tài khoản</a>
                            </li>

                        </form>
                    </div>
                    <script>
                        document.getElementById('loginForm').onsubmit = function(event) {
                        // Ngăn chặn gửi form mặc định
                        event.preventDefault();

                        // Lấy giá trị của tên đăng nhập và mật khẩu
                        const tenDangNhap = document.getElementById('hoten');
                        const matKhau = document.getElementById('mk');

                        // Xóa thông báo lỗi trước đó
                        const errorMessages = document.querySelectorAll('.error-message');
                        errorMessages.forEach(msg => msg.remove());

                        let isValid = true;

                        // Kiểm tra tên đăng nhập
                        if (tenDangNhap.value.trim() === "") {
                            const errorMessage = document.createElement('div');
                            errorMessage.textContent = "Tên đăng nhập không được để trống.";
                            errorMessage.classList.add('error-message');
                            errorMessage.style.color = 'red';
                            errorMessage.style.fontSize = '12px';
                            tenDangNhap.parentNode.appendChild(errorMessage);
                            isValid = false;
                        }

                        // Kiểm tra mật khẩu
                        if (matKhau.value.trim() === "") {
                            const errorMessage = document.createElement('div');
                            errorMessage.textContent = "Mật khẩu không được để trống.";
                            errorMessage.classList.add('error-message');
                            errorMessage.style.color = 'red';
                            errorMessage.style.fontSize = '12px';
                            matKhau.parentNode.appendChild(errorMessage);
                            isValid = false;
                        }

                        // Nếu hợp lệ, thông báo đăng nhập thành công
                        if (isValid) {
                            alert("Đăng nhập thành công!");
                            // Thực hiện gửi form nếu cần
                            // event.target.submit();
                        }
                    };
                </script>
                </div>
            </div>
            
        </div>
        
        <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="../Image/logo1.png" width="70" height="70" alt="">
                </div>
                <h4>DogCatShop cung cấp các dịch vụ chất lượng và an toàn cho thú cưng của bạn</h4>
            </div>

            <div class="box">
                <h3>Nội dung</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="trangchu.php">Trang chủ</a>
                    </div>

                    <div class="item">
                        <a href="dangky.php">Đăng ký</a>
                    </div>

                    <div class="item">
                        <a href="dangnhap.php">Đăng nhập</a>
                    </div>

                    <div class="item">
                        <a href="gioithieu.php">Giới thiệu</a>
                    </div>

                    <div class="item">
                        <a href="">Dịch vụ</a>
                    </div>

                    <div class="item">
                        <a href="datlichhen.php">Đặt lịch hẹn</a>
                    </div>
                </ul>
            </div>

            <div class="box">
                <h3>Liên hệ</h3>
                <p>kimhuongg25114@gmail.com</p>
            </div>
        </div>
        
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    $(document).ready(function(){
    $('.sub-dkdn').parent('li').addClass('has-child')
    $('.sub-menu').parent('li').addClass('has-child')
    });
</script>
</html>

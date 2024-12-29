<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DogCatShop</title>
</head>
<body>
    <style>
        #footer{
            width: 1390px;
            background: rgb(75, 73, 74);
            height: 250px;
            margin-top: 100px;
            padding: 0px 63px;
            padding-top: 50px;
            display: flex;
            justify-content: space-around;
        }

        #footer .box{
            width: 250px;
            color: #ffff;
        }

        #footer .box .logo{
            padding-left: 10px;
        }

        #footer .box .quick-menu .item{
            margin-bottom: 10px;
        }

        #footer .box .quick-menu ,.item a{
            color: #ffff;
            text-decoration: none;
        }
    </style>
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
</body>
</html>
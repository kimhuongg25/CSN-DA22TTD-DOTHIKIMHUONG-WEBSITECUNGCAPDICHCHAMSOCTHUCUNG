<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" href="../CSS/gioithieu.css">
    <title>DogCatShop</title>
    <link rel="icon" href="../Image/logo1.png" type="image/x-icon" />
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="boxcenter">
        <nav class="container">
        <img class="logo" src="../Image/logo1.png" width="80" height="80"  alt=""/>
        <div class="row mb Trangchu">
            <p align="center"><li><a href="trangchu.php">Trang chủ</a></li>
            <li><a href="dangky.php">Đăng ký</a></li>

            <li><a href="gioithieu.php">Giới thiệu</a></li>

            <li><a href="#">Dịch vụ</a>
                <ul class="sub-menu">
                    <li><a href="chamsocsacdep.php">Chăm sóc sắc đẹp</a></li>
                    <li><a href="chamsocsuckhoe.php">Chăm sóc sức khỏe</a></li>
                    <li><a href="huanluyen.php">Huấn luyện</a></li>
                    <li><a href="dichvuluutru.php">Dịch vụ lưu trú</a></li>
                </ul>
            </li>

            <li><a href="datlichhen.php">Đặt lịch hẹn</a></li>

            <li><a href="lienhe.php">Thông tin liên hệ</a></li>
            </p>
        </div>
        </nav>
        <div class="search-text">
            <input type="search" name="Tìm kiếm" placeholder="Tìm kiếm của bạn">
            <a href="#" class="search-btn">
                <i class="fa fa-search"></i>
            </a>
        </div>
        <br><br><br>
        <div id="banner">
            <img src="../Image/banner.png" alt="" width="100%" height="400px"/>
        </div>
        </div>
    </div>

    <table bgcolor="#FFFFFF" border="1" align="center" bordercolor="#666666" width="100%" cellspacing="0">
        <tr>
            <td valign="top" width="30%">
                <table bgcolor="#FFFFFF" border="0" cellspacing="0" width="100%">
                    <p align="center"><font size="5"><b>Danh mục</b></font></p>
                    <ol type="1">
                        <li><a href="#gioithieu">Chúng tôi là ai?</a></li>
                        <li><a href="#cac-dv">Các dịch vụ có tại DogCatShop.</a></li>
                        <li><a href="#tai-sao-chon-dogcatshop">Tại sao nên chọn DogCatShop?</a></li>
                    </ol>
                </table>
            </td>

            <td valign="top">
            <p align="center"><font size="5"><b>DogCatShop</b></font></p>
            <div class="section" id="gioithieu">
                <b>1. Chúng tôi là ai?</b>
                <b>Chào mừng bạn đến với DogCatShop – Nơi chăm sóc thú cưng toàn diện!</b>
                &nbsp;&nbsp;&nbsp;&nbsp;
                Tại DogCatShop, chúng tôi hiểu rằng thú cưng không chỉ là những người bạn đồng hành mà còn là thành viên quan trọng trong gia đình bạn. Với tình yêu thương và sự tận tâm, chúng tôi cam kết mang đến những dịch vụ tốt nhất để thú cưng của bạn luôn khỏe mạnh, xinh đẹp và hạnh phúc.            
                <br>&nbsp;&nbsp;&nbsp;&nbsp;
                DogCatShop là đơn vị chuyên cung cấp các dịch vụ chăm sóc thú cưng toàn diện. Từ việc chăm sóc sắc đẹp, sức khỏe, huấn luyện đến dịch vụ lưu trú, chúng tôi luôn đồng hành cùng bạn trên hành trình yêu thương và chăm sóc những người bạn nhỏ.
            </div>
            
            <div class="section" id="cac-dv">
                <b>2. Các dịch vụ có tại DogCatShop.</b>
                &nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc sắc đẹp:
                
                <ul id="list-service">
                    <div class="item">
                        <img src="../Image/Chăm sóc sắc đẹp/vuipet-spa-thu-cung-4-scaled.jpg" width="350" height="250" alt="">
                        <div class="name">Tắm rửa</div>
                    </div>

                    <div class="item">
                        <img src="../Image/Chăm sóc sắc đẹp/temptations_49_1712059446522.jpg" width="350" height="250" alt="">
                        <div class="name">Cắt tỉa lông</div>
                    </div>

                    <div class="item">
                        <img src="../Image/Chăm sóc sắc đẹp/cat-mong-cho-meo-min-1.webp" width="350" height="250" alt="">
                        <div class="name">Làm móng</div>
                    </div>
                </ul>

                &nbsp;&nbsp;&nbsp;&nbsp;Chăm sóc sức khỏe:

                <ul id="list-service">
                    <div class="item">
                        <img src="../Image/Chăm sóc sức khỏe/unnamed.jpg" width="350" height="250" alt="">
                        <div class="name">Khám sức khỏe định kỳ</div>
                    </div>

                    <div class="item">
                        <img src="../Image/Chăm sóc sức khỏe/20230327_tiem-phong-cho-cho.jpg" width="350" height="250" alt="">
                        <div class="name">Tiêm ngừa</div>
                    </div>
                </ul>
                
                &nbsp;&nbsp;&nbsp;&nbsp;Huấn luyện thú cưng:
                
                <ul id="list-service">
                    <div class="item">
                        <img src="../Image/Huấn luyện/o9k0rb3srep4kk4ws7zyy4xoqtrp_day-meo-di-ve-sinh-vao-cat-1.webp" width="350" height="250" alt="">
                        <div class="name">Huấn luyện về hành vi</div>
                    </div>

                    <div class="item">
                        <img src="../Image/Huấn luyện/husky1.jpg" width="350" height="250" alt="">
                        <div class="name">Huấn luyện cơ bản</div>
                    </div>

                    <div class="item">
                        <img src="../Image/Huấn luyện/luu-y-cho-cho-boi-vuipet-7.jpg" width="350" height="250" alt="">
                        <div class="name">Huấn luyện nâng cao</div>
                    </div>
                </ul>

                &nbsp;&nbsp;&nbsp;&nbsp;Dịch vụ lưu trú:
                
                <ul id="list-service">
                    <div class="item">
                        <img src="../Image/Dịch vụ lưu trú/khach-san-cho-meo-ha-noi-cu-cai-shop_600x600.webp" width="350" height="250" alt="">
                        <div class="name">Ký gửi thú cưng</div>
                    </div>

                    <div class="item">
                        <img src="../Image/Dịch vụ lưu trú/thu-cung-1.jpg" width="350" height="250" alt="">
                        <div class="name">Homestay</div>
                    </div>

                </ul>
            </div>

            <div class="section" id="tai-sao-chon-dogcatshop">
                <b>3. Tại sao nên chọn DogCatShop?</b>
                &nbsp;&nbsp;&nbsp;&nbsp;
                Chuyên nghiệp: Đội ngũ nhân viên và bác sĩ thú y giàu kinh nghiệm, được đào tạo bài bản.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;
                Tận tâm: Chúng tôi luôn đặt lợi ích và sự thoải mái của thú cưng lên hàng đầu.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;
                Tiện nghi: Hệ thống cơ sở vật chất hiện đại, sạch sẽ và an toàn.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;
                Yêu thương: Chúng tôi xem thú cưng của bạn như những thành viên trong gia đình mình.
                <br>
                Hãy để DogCatShop là người bạn đồng hành tin cậy của bạn trong hành trình chăm sóc và yêu thương thú cưng.

            </did>
        </tr>
    </table>
    <?php 
    include("../admin/footer.php")
?>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    $(document).ready(function(){
    $('.sub-dkdn').parent('li').addClass('has-child')
    $('.sub-menu').parent('li').addClass('has-child')
    });
</script>
</html>
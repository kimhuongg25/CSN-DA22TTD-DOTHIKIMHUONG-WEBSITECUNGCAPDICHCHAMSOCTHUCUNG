<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet" href="../CSS/datlichhen.css"/>
    <title>DogCatShop</title>
    <link rel="icon" href="../Image/logo1.png" type="image/x-icon" />
</head>
<body>
    <form action="" name="danglichhen" method="post">
    <h2 class="form-heading">Đặt lịch hẹn</h2>
        <table>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="txtht" size="70" placeholder="Vui lòng nhập họ tên"/>
                    <span class="error-message" style="color: red; font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td>Số điện thoại liên hệ:</td>
                <td><input type="text" name="txtsdt" size="70" placeholder="Vui lòng nhập SĐT"/>
                    <span class="error-message" style="color: red; font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td>Đặt lịch:</td>
                <td><select name="slcongviec" id="">
                    <option value="" selected="selected">Khám sức khỏe định kỳ</option>
                    <option value="">Tiêm ngừa</option>
                    <option value="">Tắm rửa</option>
                    <option value="">Cắt tỉa lông</option>
                    <option value="">Làm móng</option>
                    <option value="">Huấn luyện cơ bản</option>
                    <option value="">Huấn luyện nâng cao</option>
                    <option value="">Huấn luyện vấn đề hành vi</option>
                    <option value="">Ký gửi thú cưng</option>
                    <option value="">Homestay thú cưng</option>
                </select></td>
            </tr>

            <tr>
                <td>Ngày đến:</td>
                <td><input type="date" name="dNden">
                    <span class="error-message" style="color: red; font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td>Chọn dịch vụ:</td>
                <td><select name="slDV" id="">
                    <option value="chamsocsk" selected="selected">Chăm sóc sức khỏe</option>
                    <option value="chamsocsd">Chăm sóc sắc đẹp</option>
                    <option value="huanluyen">Huấn luyện</option>
                    <option value="luutru">Dịch vụ lưu trú</option>
                </select></td>
            </tr>

            <tr>
                <td>Khung giờ khách đến:</td>
                <td><textarea name="txtaKGio" id="" cols="60" rows="5"></textarea>
                    <span class="error-message" style="color: red; font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Xác nhận đặt lịch hẹn</button>
                </td>
            </tr>
        </table>
    </form>
</body>
    <script>
        document.forms['danglichhen'].onsubmit = function (event) {
    // Ngăn chặn hành động gửi form mặc định
        event.preventDefault();

        // Lấy các trường thông tin trong form
        const hoTen = document.forms['danglichhen']['txtht'];
        const sdt = document.forms['danglichhen']['txtsdt'];
        const ngayDen = document.forms['danglichhen']['dNden'];
        const khungGio = document.forms['danglichhen']['txtaKGio'];

        // Biến kiểm tra hợp lệ của form
        let isValid = true;

        // Kiểm tra họ tên
        if (hoTen.value.trim() === "") {
            hoTen.nextElementSibling.textContent = "Họ tên không được để trống.";
            isValid = false;
        } else {
            hoTen.nextElementSibling.textContent = "";
        }

        // Kiểm tra số điện thoại
        const sdtPattern = /^\d{10}$/; // Mẫu kiểm tra số điện thoại (10 số)
        if (sdt.value.trim() === "") {
            sdt.nextElementSibling.textContent = "Số điện thoại không được để trống.";
            isValid = false;
        } else if (!sdtPattern.test(sdt.value.trim())) {
            sdt.nextElementSibling.textContent = "Số điện thoại phải bao gồm 10 chữ số.";
            isValid = false;
        } else {
            sdt.nextElementSibling.textContent = "";
        }

        // Kiểm tra ngày đến
        if (ngayDen.value === "") {
            ngayDen.nextElementSibling.textContent = "Ngày đến không được để trống.";
            isValid = false;
        } else {
            ngayDen.nextElementSibling.textContent = "";
        }

        // Kiểm tra khung giờ
        if (khungGio.value.trim() === "") {
            khungGio.nextElementSibling.textContent = "Khung giờ không được để trống.";
            isValid = false;
        } else {
            khungGio.nextElementSibling.textContent = "";
        }

        // Nếu form hợp lệ, hiển thị thông báo thành công
        if (isValid) {
            alert("Đặt lịch hẹn thành công!");
            // Có thể thực hiện gửi form ở đây nếu cần
            // event.target.submit();
        }
    };
</script>
</html>

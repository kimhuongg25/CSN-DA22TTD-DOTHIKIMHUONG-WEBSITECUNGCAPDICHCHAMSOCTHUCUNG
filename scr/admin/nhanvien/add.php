<div class="row">
            <div class="row frmtitle">
                <div class="row"></div>
                <h1>THÊM NHÂN VIÊN MỚI</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addnv" method="post">
                    <div class="row mb10">
                        Mã nhân viên<br>
                        <input type="text" name="maNV" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        Tên nhân viên<br>
                        <input type="text" name="tenNV">
                    </div>
                    <br>
                    <div class="row mb10">
                        Số điện thoại<br>
                        <input type="text" name="SDT_NV">
                    </div>
                    <br>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="DC">
                    </div>
                    <br>
                    <div class="row mb10">
                        Vị trí công việc<br>
                        <input type="text" name="viTriCV">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=ds_nhanvien"><input type="button" value="Danh sách"></a>
                    </div>
                    
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div> 
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy form và các phần tử cần thiết
        const form = document.querySelector("form");
        const inputTenNV = form.querySelector("input[name='tenNV']");
        const inputSDT_NV = form.querySelector("input[name='SDT_NV']");
        const inputDC = form.querySelector("input[name='DC']");
        const inputViTriCV = form.querySelector("input[name='viTriCV']");
        const btnSubmit = form.querySelector("input[name='themmoi']");

        // Kiểm tra dữ liệu đầu vào khi gửi form
        form.addEventListener("submit", function (e) {
            // Loại bỏ khoảng trắng thừa
            const tenNV = inputTenNV.value.trim();
            const SDT_NV = inputSDT_NV.value.trim();
            const DC = inputDC.value.trim();
            const viTriCV = inputViTriCV.value.trim();

            // Kiểm tra nếu tên nhân viên để trống
            if (tenNV === "") {
                alert("Vui lòng nhập tên nhân viên!");
                inputTenNV.focus();
                e.preventDefault(); // Ngăn không cho gửi form
                return;
            }

            // Kiểm tra nếu số điện thoại để trống hoặc không hợp lệ
            if (SDT_NV === "" || !/^[0-9]{10,11}$/.test(SDT_NV)) {
                alert("Vui lòng nhập số điện thoại hợp lệ (10-11 chữ số)!");
                inputSDT_NV.focus();
                e.preventDefault(); // Ngăn không cho gửi form
                return;
            }

            // Kiểm tra nếu địa chỉ để trống
            if (DC === "") {
                alert("Vui lòng nhập địa chỉ!");
                inputDC.focus();
                e.preventDefault(); // Ngăn không cho gửi form
                return;
            }

            // Kiểm tra nếu vị trí công việc để trống
            if (viTriCV === "") {
                alert("Vui lòng nhập vị trí công việc!");
                inputViTriCV.focus();
                e.preventDefault(); // Ngăn không cho gửi form
                return;
            }

            // Xác nhận trước khi thêm nhân viên
            const confirmSubmit = confirm("Bạn có chắc muốn thêm nhân viên mới?");
            if (!confirmSubmit) {
                e.preventDefault(); // Ngăn không cho gửi form nếu hủy
            }
        });

        // Hiệu ứng khi nhấn nút "Nhập lại"
        const btnReset = form.querySelector("input[type='reset']");
        btnReset.addEventListener("click", function () {
            inputTenNV.focus(); // Đưa con trỏ về ô nhập tên nhân viên
        });
        
    });
</script>

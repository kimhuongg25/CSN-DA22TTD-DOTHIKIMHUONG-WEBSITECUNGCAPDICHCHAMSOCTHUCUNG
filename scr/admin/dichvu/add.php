<div class="row">
            <div class="row frmtitle">
                <div class="row"></div>
                <h1>THÊM DỊCH VỤ MỚI</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddv" method="post">
                    <div class="row mb10">
                        Mã dịch vụ<br>
                        <input type="text" name="maDV" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        Tên dịch vụ<br>
                        <input type="text" name="tenDV">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=ds_dichvu"><input type="button" value="Danh sách"></a>
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
        const inputTenDV = form.querySelector("input[name='tenDV']");
        const btnSubmit = form.querySelector("input[name='themmoi']");

        // Kiểm tra dữ liệu đầu vào
        form.addEventListener("submit", function (e) {
            // Loại bỏ khoảng trắng thừa
            const tenDV = inputTenDV.value.trim();

            // Kiểm tra nếu tên dịch vụ để trống
            if (tenDV === "") {
                alert("Vui lòng nhập tên dịch vụ!");
                inputTenDV.focus();
                e.preventDefault(); // Ngăn không cho gửi form
                return false;
            }

            // Xác nhận trước khi thêm dịch vụ
            const confirmSubmit = confirm("Bạn có chắc muốn thêm dịch vụ mới?");
            if (!confirmSubmit) {
                e.preventDefault(); // Ngăn không cho gửi form nếu hủy
                return false;
            }
        });

        // Hiệu ứng khi nhấn nút "Nhập lại"
        const btnReset = form.querySelector("input[type='reset']");
        btnReset.addEventListener("click", function () {
            inputTenDV.focus(); // Đưa con trỏ về ô nhập tên dịch vụ
        });
    });
</script>


document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("form-dangky");
    const hoten = document.getElementById("hoten");
    const sdt = document.getElementById("sdt");
    const email = document.getElementById("email");
    const mk = document.getElementById("mk");

    // Thêm trình xử lý sự liện cho biểu mẫu
    form.addEventListener("submit", function (event) {
        event.preventDefault(); 

        if (hoten.value.trim() === "") {
            alert("Vui lòng nhập họ tên");
            hoten.focus();
            return;
        }

        if (sdt.value.trim() === "" || !/^\d{10}$/.test(sdt.value)) {
            alert("Vui lòng nhập số điện thoại hợp lệ (10 chữ số)");
            sdt.focus();
            return;
        }

        if (email.value.trim() === "" || !/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.value)) {
            alert("Vui lòng nhập email hợp lệ");
            email.focus();
            return;
        }

        if (mk.value.trim() === "" || mk.value.length < 6) {
            alert("Mật khẩu phải có ít nhất 6 ký tự");
            mk.focus();
            return;
        }

        // Nếu tất cả các trường đều hợp lệ, hãy gửi biểu mẫu
        alert("Đăng ký thành công!");
        form.submit();
    });

    // Chức năng nút hủy bỏ
    document.querySelector(".cancelbtn").addEventListener("click", function () {
        form.reset();
    });

});


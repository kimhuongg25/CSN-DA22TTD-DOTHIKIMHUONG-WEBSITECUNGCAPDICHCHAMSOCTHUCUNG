<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link
        rel="stylesheet" href="/CSS/ds_nhanvien.css"-->
    <title>admin</title>
    <link rel="icon" href="../Image/logo1.png" type="image/x-icon" />
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="row">
            <div class="row frmtitle">
                <div class="row"></div>
                <h1>DANH SÁCH NHÂN VIÊN</h1>
            </div>

            <div class="row frmcontent">
                <div class="row mb10">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã nhân viên</th>
                            <th>Tên nhân viên</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Vị trí công việc</th>
                            <th></th>
                        </tr>
                        
                        <?php
                            foreach ($ds_nhanvien as $nhanvien){
                                extract($nhanvien);
                                $suanv="index.php?act=suanv&maNV=".$maNV;
                                $xoanv="index.php?act=xoanv&maNV=".$maNV;
                                echo '<tr>
                                        <td><input type="checkbox" tenNV="" SDT_NV="" DC="" viTriCV="" maNV=""></td>
                                        <td>'.$maNV.'</td>
                                        <td>'.$tenNV.'</td>
                                        <td>'.$SDT_NV.'</td>
                                        <td>'.$DC.'</td>
                                        <td>'.$viTriCV.'</td>
                                        <td><a href="'.$suanv.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoanv.'"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                            }
                        ?>
                        
                    </table>
                </div>

                <br>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả" onclick="selectAll()">
                    <input type="button" value="Bỏ chọn tất cả" onclick="deselectAll()">
                    <input type="button" value="Xóa tất cả các mục đã chọn" onclick="deleteSelected()">
                    <a href="index.php?act=addnv"><input type="button" value="Thêm mới"></a>
                </div>
            </div>
        </div>
    
</body>
</html>
<script>
    // Sự kiện "Chọn tất cả"
    function selectAll() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.checked = true;
        });
    }

    // Sự kiện "Bỏ chọn tất cả"
    function deselectAll() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.checked = false;
        });
    }

    // Sự kiện "Xóa tất cả các mục đã chọn"
    function deleteSelected() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        if (checkboxes.length === 0) {
            alert("Không có mục nào được chọn để xóa.");
            return;
        }

        if (confirm("Bạn có chắc chắn muốn xóa các mục đã chọn?")) {
            checkboxes.forEach(checkbox => {
                const row = checkbox.closest("tr");
                row.remove();
            });
        }
    }
</script>

<style>      
    .frmtitle{
        background-color: #EEE;
        border: 1px #ccc solid;
        color: #666;
        border-radius: 5px;
        padding: 0px 20px;
        justify-items: center;
        margin: 10px;
    }

    .frmcontent{
        padding: 20px 0px;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        border-color: #999 solid;
    }

    table th:nth-child(1){
        width: 5%;
        padding: 20px;
        background-color: #ccc;
    }

    table th:nth-child(2){
        width: 10%;
        padding: 20px;
        background-color: #ccc;
    }

    table th:nth-child(3){
        width: 15%;
        padding: 20px;
        background-color: #ccc;
    }

    table th:nth-child(4){
        width: 10%;
        padding: 20px;
        background-color: #ccc;
    }

    table th:nth-child(5){
        width: 20%;
        padding: 20px;
        background-color: #ccc;
    }

    table th:nth-child(6){
        width: 10%;
        padding: 20px;
        background-color: #ccc;
    }

    table th:nth-child(7){
        width: 10%;
        padding: 20px;
        background-color: #ccc;
    }

    table td{
        padding: 10px 20px;
        border: 1px #ccc solid;
    }

</style>

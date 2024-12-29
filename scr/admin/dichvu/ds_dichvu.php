<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet" href="../CSS/ds_dichvu.css">
    <title>admin</title>
    <link rel="icon" href="../Image/logo1.png" type="image/x-icon" />
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="row">
            <div class="row frmtitle">
                <div class="row"></div>
                <h1>DANH SÁCH DỊCH VỤ</h1>
            </div>

            <div class="row frmcontent">
                <div class="row mb10">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã dịch vụ</th>
                            <th>Tên dịch vụ</th>
                            <th></th>
                        </tr>
                        
                        <?php
                            foreach ($ds_dichvu as $dichvu){
                                extract($dichvu);
                                $suadv="index.php?act=suadv&maDV=".$maDV;
                                $xoadv="index.php?act=xoadv&maDV=".$maDV;
                                echo '<tr>
                                        <td><input type="checkbox" tenDV="" maDV=""></td>
                                        <td>'.$maDV.'</td>
                                        <td>'.$tenDV.'</td>
                                        <td><a href="'.$suadv.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoadv.'"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                            }
                        ?>
                        

                        <!--<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>DV002</td>
                            <td>Chăm sóc sức khỏe</td>
                            <td><input type="button" value="Sửa">
                                <input type="button" value="Xóa">
                            </td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>DV003</td>
                            <td>Huấn luyện</td>
                            <td><input type="button" value="Sửa">
                                <input type="button" value="Xóa">
                            </td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>DV004</td>
                            <td>Lưu trú</td>
                            <td><input type="button" value="Sửa">
                                <input type="button" value="Xóa">
                            </td>
                        </tr>-->
                    </table>
                </div>

                <br>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả" onclick="selectAll()">
                    <input type="button" value="Bỏ chọn tất cả" onclick="deselectAll()">
                    <input type="button" value="Xóa tất cả các mục đã chọn" onclick="deleteSelected()">
                    <a href="index.php?act=adddv"><input type="button" value="Thêm mới"></a>
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
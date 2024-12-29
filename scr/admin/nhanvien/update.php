<?php
    if(is_array($nv)){
        extract($nv);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <div class="row"></div>
                <h1>CẬP NHẬT NHÂN VIÊN MỚI</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatenv" method="post">
                    <div class="row mb10">
                        Mã nhân viên<br>
                        <input type="text" name="maNV" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        Tên nhân viên<br>
                        <input type="text" name="tenNV" value="<?php if(isset($tenNV)&&($tenNV!="")) echo $tenNV;?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        Số điện thoại<br>
                        <input type="text" name="SDT_NV" value="<?php if(isset($SDT_NV)&&($SDT_NV!="")) echo $SDT_NV;?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="DC" value="<?php if(isset($DC)&&($DC!="")) echo $DC;?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        Vị trí công việc<br>
                        <input type="text" name="viTriCV" value="<?php if(isset($viTriCV)&&($viTriCV!="")) echo $viTriCV;?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="maNV" value="<?php if(isset($maNV)&&($maNV>0)) echo $maNV;?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
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
<?php
    if(is_array($dv)){
        extract($dv);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <div class="row"></div>
                <h1>CẬP NHẬT DỊCH VỤ MỚI</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedv" method="post">
                    <div class="row mb10">
                        Mã dịch vụ<br>
                        <input type="text" name="maDV" disabled>
                    </div>
                    <br>
                    <div class="row mb10">
                        Tên dịch vụ<br>
                        <input type="text" name="tenDV" value="<?php if(isset($tenDV)&&($tenDV!="")) echo $tenDV;?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="maDV" value="<?php if(isset($maDV)&&($maDV>0)) echo $maDV;?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
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
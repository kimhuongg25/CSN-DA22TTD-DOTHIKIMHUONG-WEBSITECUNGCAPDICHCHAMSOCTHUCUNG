<?php
    include "../model/pdo.php";
    include "headeradmin.php";
    //controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case "adddv":
                //ktra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenDV=$_POST['tenDV'];
                    $sql="insert into dichvu(tenDV) values('$tenDV')";
                    pdo_execute($sql);
                    $thongbao="Thêm thành công";
                }
                include "../admin/dichvu/add.php";
                break;
            
            case "ds_dichvu":
                $sql="select * from dichvu order by maDV desc";
                $ds_dichvu=pdo_query($sql);
                include "../admin/dichvu/ds_dichvu.php";
                break;

            case 'xoadv':
                if(isset($_GET['maDV'])&&($_GET['maDV']>0)){
                    $sql="delete from dichvu where maDV=".$_GET['maDV'];
                    pdo_execute($sql);
                }
                $sql="select * from dichvu order by tenDV";
                $ds_dichvu=pdo_query($sql);
                include "../admin/dichvu/ds_dichvu.php";
                break;
            
            case 'suadv':
                if(isset($_GET['maDV'])&&($_GET['maDV']>0)){
                    $sql="select * from dichvu where maDV=".$_GET['maDV'];
                    $dv=pdo_query_one($sql);
                }
                include "../admin/dichvu/update.php";
                break;

            case 'updatedv':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenDV=$_POST['tenDV'];
                    $maDV=$_POST['maDV'];
                    $sql="update dichvu set tenDV='".$tenDV."' where maDV=".$maDV;
                    pdo_execute($sql);
                    $thongbao="Cập nhật thành công";
                }
                $sql="select * from dichvu order by tenDV";
                $ds_dichvu=pdo_query($sql);
                include "../admin/dichvu/ds_dichvu.php";
                break;


                case "addnv":
                    //ktra xem người dùng có click vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenNV=$_POST['tenNV'];
                        $SDT_NV=$_POST['SDT_NV'];
                        $DC=$_POST['DC'];
                        $viTriCV=$_POST['viTriCV'];
                        $sql="insert into nhanvien(tenNV, SDT_NV, DC, viTriCV) values('$tenNV', '$SDT_NV', '$DC', '$viTriCV')";
                        pdo_execute($sql);
                        $thongbao="Thêm thành công";
                    }
                    include "../admin/nhanvien/add.php";
                    break;
                
                case "ds_nhanvien":
                    $sql="select * from nhanvien order by maNV desc";
                    $ds_nhanvien=pdo_query($sql);
                    include "../admin/nhanvien/ds_nhanvien.php";
                    break;
    
                case 'xoanv':
                    if(isset($_GET['maNV'])&&($_GET['maNV']>0)){
                        $sql="delete from nhanvien where maNV=".$_GET['maNV'];
                        pdo_execute($sql);
                    }
                    $sql="select * from nhanvien order by tenNV";
                    $ds_nhanvien=pdo_query($sql);
                    include "../admin/nhanvien/ds_nhanvien.php";
                    break;
                
                case 'suanv':
                    if(isset($_GET['maNV'])&&($_GET['maNV']>0)){
                        $sql="select * from nhanvien where maNV=".$_GET['maNV'];
                        $nv=pdo_query_one($sql);
                    }
                    include "../admin/nhanvien/update.php";
                    break;
    
                case 'updatenv':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenNV=$_POST['tenNV'];
                        $SDT_NV=$_POST['SDT_NV'];
                        $DC=$_POST['DC'];
                        $viTriCV=$_POST['viTriCV'];
                        $maNV=$_POST['maNV'];
                        $sql="update nhanvien set tenNV='".$tenNV."', SDT_NV='".$SDT_NV."', DC='".$DC."', viTriCV='".$viTriCV."' where maNV=".$maNV;
                        pdo_execute($sql);
                        $thongbao="Cập nhật thành công";
                    }
                    $sql="select * from nhanvien order by tenNV, SDT_NV, DC, viTriCV";
                    $ds_nhanvien=pdo_query($sql);
                    include "../admin/nhanvien/ds_nhanvien.php";
                    break;
    
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footeradmin.php";
?>
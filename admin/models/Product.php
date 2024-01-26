<?php
function getAllProduct() {
    try {
    
        $sql = "SELECT * FROM tb_products";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function productDel($id){
    try {
        
        $sql = "DELETE FROM `tb_products` WHERE id_product = :id_product";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
       
        $stmt->bindParam(':id_product', $id);
       
        $stmt->execute();
        
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function addProduct($name_product, $price_product, $description_product, $date_add, $iddm, $tags) {
    try {
        $sql = "INSERT INTO tb_products (name_product, price_product, description_product, date_add, iddm, tags) VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->bindParam(1, $name_product);
        $stmt->bindParam(2, $price_product);
        $stmt->bindParam(3, $description_product);
        $stmt->bindParam(4, $date_add);
        $stmt->bindParam(5, $iddm);
        $stmt->bindParam(6, $tags);
        
        $stmt->execute();
        
        return $GLOBALS['conn']->lastInsertId();
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function addProduct_Img($id_product, $img) {
    try {
        $sql = "INSERT INTO tb_images_product (id_product, img) VALUES (:id_product, :img)";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->bindParam(':id_product', $id_product);
        $stmt->bindParam(':img', $img);
        
        $stmt->execute();
        
        // Không cần lấy dữ liệu sau khi INSERT, vì INSERT chỉ thêm dữ liệu, không trả về dữ liệu mới.
        
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

// function insert_sanpham($ma_sp,$ten_sp,$gia_sp,$gia_cu_sp,$so_luong,$thuong_hieu_sp,$mo_ta_sp,$mo_ta_ngan_sp,$id_dm){
//     if ($gia_cu_sp=="") {
//        $sql = "INSERT INTO `sanpham`( `ma_sp`, `ten_sp`, `gia_sp`, `so_luong`, `thuong_hieu_sp`, `mo_ta_sp`, `mo_ta_ngan_sp`, `id_dm`) 
//        VALUES ('$ma_sp','$ten_sp','$gia_sp','$so_luong','$thuong_hieu_sp','$mo_ta_sp','$mo_ta_ngan_sp','$id_dm')";
      
//    }else{
//        $sql = "INSERT INTO `sanpham`( `ma_sp`, `ten_sp`, `gia_sp`, `gia_cu_sp`, `so_luong`, `thuong_hieu_sp`, `mo_ta_sp`, `mo_ta_ngan_sp`, `id_dm`) 
//    VALUES ('$ma_sp','$ten_sp','$gia_sp','$gia_cu_sp','$so_luong','$thuong_hieu_sp','$mo_ta_sp','$mo_ta_ngan_sp','$id_dm')";
  
//    }
//    return pdo_execute_return_lastInsertID($sql);
// }

// function insert_san_pham_anh($id_san_pham,$anh_sp){
//    if ($anh_sp!="") {
//        $sql = "INSERT INTO `sanpham_anh`( `id_san_pham`, `anh_sp`) VALUES ('$id_san_pham','$anh_sp')";
//        pdo_execute($sql);
//    }
// }
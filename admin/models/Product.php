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
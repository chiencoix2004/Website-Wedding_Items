<?php
function productList() {
    
    $productAll = getAllProduct();
    
    require_once './client/views/product/list.php';
}

function productDetail($id) {
    
    $productDetail = getProductDetail($id);

     require_once './client/views/product/detail.php';
   
}
function productCategory($id) {
    
    $dm = spdm($id);
    require_once './client/views/category/list.php';
}
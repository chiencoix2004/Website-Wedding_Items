<?php
function productList() {
    
    $productAll = getAllProduct();
    
    require_once './views/product/list.php';
}

function productAdd() {
    
    // $productAll = getAllProduct();
    
    require_once './views/product/add.php';
}
function productEdit() {
    
    // $productAll = getAllProduct();
    
    require_once './views/product/edit.php';
}

// function productDetail($id) {
    
//     // $product = getProductByID($id);

//     $product ? require_once './client/views/product/detail.php': e404();
   
// }
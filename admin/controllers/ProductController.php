<?php
function productList() {
    
    $productAll = getAllProduct();
    
    require_once './views/product/list.php';
}

function productAdd() {

        if (isset($_POST['themmoi']) && $_POST['themmoi']) {
            $name_product = $_POST['name_product'];
            $price_product = $_POST['price_product'];
            $description_product = $_POST['description_product'];
            $date_add = date('h:i:sa d/m/Y');
            $iddm = $_POST['iddm'];
            $tags = $_POST['tags'];
            $id_product = addProduct($name_product,$price_product,$description_product,$date_add,$iddm,$tags);
            
            for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
             $basename = basename($_FILES["images"]["name"][$i]);
                $targetFilePath = "../uploads/" . $basename;
                // Kiểm tra xem file đã tồn tại chưa
                if (!file_exists($targetFilePath)) {
                    // Di chuyển file từ thư mục tạm thời đến thư mục upload
                    move_uploaded_file($_FILES["images"]["tmp_name"][$i], $targetFilePath);
                }
                addProduct_Img($id_product, $basename);
            }
            echo"
       <script>
       setTimeout(function send(){
        
        Swal.fire(
            'Successful!',
            'Add successful products!',
            'success'
        )
    },1000)
       </script>";
        }
            
    $categoryAll = getAllCategory();
    require_once './views/product/add.php';
}
function productEdit() {
    
    // $productAll = getAllProduct();
    
    require_once './views/product/edit.php';
}
function productDelete($id) {
   
    $productDelete = productDel($id);

    $productAll=getAllProduct();
    
    require_once './views/product/list.php';
}

// function productDetail($id) {
    
//     // $product = getProductByID($id);

//     $product ? require_once './client/views/product/detail.php': e404();
   
// }
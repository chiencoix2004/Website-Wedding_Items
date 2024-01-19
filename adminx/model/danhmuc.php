<?php
function ds_sanpham()
{

    // Dữ liệu bạn muốn thêm vào file JSON
    $data = array(
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York'
    );

    // Chuyển đổi mảng thành chuỗi JSON
    $jsonData = json_encode($data);

    // Tên file JSON bạn muốn sử dụng
    $fileName = '../view/json/ecommerce-category-list.json';

    // Ghi chuỗi JSON vào file
    file_put_contents($fileName, $jsonData);

    echo "Dữ liệu đã được ghi vào file JSON thành công.";
}

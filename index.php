<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once './common/connect-db.php';
require_once './common/helper.php';

require_file ('./client/controllers/');
require_file ('./client/models/');

require_once './client/views/header.php';
$act = $_GET['act'] ?? null;

match ($act) {
    // 'dssp' => productList(),
    //  'ctsp' => productDetail($_GET['id']),
    'taikhoan' => login(),
    
     default => trangChu(),
};




require_once './client/views/footer.php';
require_once './common/disconnect-db.php';
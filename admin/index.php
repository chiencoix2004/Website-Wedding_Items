<?php

require_once '../common/connect-db.php';
require_once '../common/helper.php';
require_once '../global.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_file ('./controllers/');
require_file ('./models/');

require_once './views/header.php';
$act = $_GET['act'] ?? null;
match ($act) {
    'dssp' => productList(),
    'addsp' => productAdd(),
    'editsp' => productEdit(),
    'xoasp' => productDelete($_GET['id']),

    'dsdm' => categoryList(),
    'adddm'=> categoryAdd(),
    'xoadm'=> categoryDelete($_GET['id']),
    'editdm'=> categoryDetail($_GET['id']),
    'updm'=> categoryUpdate(),
    
    
    //  'ctsp' => productDetail($_GET['id']),
     default => trangChu(),
};
//aaa



require_once './views/footer.php';
require_once '../common/disconnect-db.php';

<?php
require_once '../common/connect-db.php';
require_once '../common/helper.php';

require_file ('./controllers/');
require_file ('./models/');

require_once './views/header.php';
$act = $_GET['act'] ?? null;

match ($act) {
    'dssp' => productList(),
    'addsp' => productAdd(),
    'editsp' => productEdit(),
    'xoasp' => productDelete($_GET['id']),
    

    //  'ctsp' => productDetail($_GET['id']),
     default => trangChu(),
};
//aaa



require_once './views/footer.php';
require_once '../common/disconnect-db.php';

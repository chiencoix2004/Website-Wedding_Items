<?php
session_start();
require_once './common/connect-db.php';
require_once './common/helper.php';

$act = $_GET['act'] ?? null;

match ($act) {
    'dssp' => productList(),
     'ctsp' => productDetail($_GET['id']),
     default => trangChu(),
};

require_once './common/disconnect-db.php';
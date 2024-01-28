<?php
function accoutList() {

    $accoutList = getAllAccout();

    require_once './views/accout/list.php';
}
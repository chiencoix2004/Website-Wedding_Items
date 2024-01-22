<?php

function contactList()
{
     $data = getContactsAll();
     require_once './views/contact/list.php';
}

function contactDetail($id)
{
     $data = getContact($id);
     //debug($data);
     require_once './views/contact/detail.php';
}

function deleteContact($id)
{
     deleteContact($id);
}

function updateContact($id){
     
     
}
<?php
function getContactsAll()
{
    try {
       
        $sql = "SELECT * FROM tb_contact";
       
        $stmt = $GLOBALS['conn']->prepare($sql);
     
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function getContact($id)
{
    try {

        $sql = "SELECT * FROM tb_contact WHERE id_contact = :id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function contactUpdate($id)
{
    try {

        $sql = "UPDATE `tb_contact` SET `fullname`='',`email`='',`phone_number`='',`address`='',`content`='',`status`='' WHERE id_contact =:id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}


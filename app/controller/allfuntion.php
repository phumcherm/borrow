<?php

require('../../app/models/Modelborrow.php');
class Borrow

{
    // Itemdata funtion
    public function fetch_data()
    {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM itemdata");
        $query->execute();
        return $query->fetchAll();
    }
    // Borrow funtion
    public function fetch_borrow()
    {
        global $pdo;
        $query = $pdo->prepare("SELECT  
        itemdata.id,detail,tbl_borrow.borrow_id ,itemdata.itemCode,tbl_borrow.dateCreate ,tbl_borrow.Backdate 
        FROM `itemdata`,tbl_borrow WHERE itemdata.itemCode = tbl_borrow.itemCode  
        ORDER BY tbl_borrow.dateCreate  DESC");
        $query->execute();

        return $query->fetchAll();
    }
    // Back funtion
    public function fetch_back()
    {
        global $pdo;
        $query = $pdo->prepare("SELECT  
        itemdata.id,detail ,itemdata.itemCode,tbl_back.b_work ,
        tbl_back.b_location ,tbl_back.dateCreate ,tbl_back.dateBack 
        FROM `itemdata` ,tbl_back WHERE itemdata.itemCode = tbl_back.itemCode 
        ORDER BY tbl_back.dateBack  DESC");
        $query->execute();

        return $query->fetchAll();
    }

    public function Delete_data($cat_id)
    {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM dd_cat WHERE cat_id = ?");
        $query->bindValue(1, $cat_id);
        $query->execute();

        return $query->fetch();
    }

    public function item_data()
    {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM itemdata");
        $query->execute();

        return $query->fetchAll();
    }
    public function insert_br()
    {
        global $pdo;
        $data = [];
        $sql = "INSERT INTO tbl_borrow(id,itemCode) SELECT id,itemCode FROM itemdata 
        WHERE itemCode = ''";
        $insert = $pdo->prepare($sql);
        $insert->execute($data);

        return $insert;
    }
}


?>
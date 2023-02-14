<?php

define('DB_SERVER', '172.18.0.1:9906');
define('DB_USER', 'ceitdb');
define('DB_PASS', '12345678');
define('DB_NAME', 'ceitdb');

class DB_con
{
    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL : " . mysqli_connect_error();
        }
    }

    function selectAll()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata");
        return $result;
    }

    function selectWhereCode($itemCode)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata WHERE itemCode IN ($itemCode) ");
        return $result;
    }

    function selectPage($startRow, $rowPerPage)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata limit $startRow,$rowPerPage");
        return $result;
    }

    function selectCountGroup($startRow, $rowPerPage)
    {
        $result = mysqli_query($this->dbcon, "SELECT *,count(*) FROM itemdata limit $startRow,$rowPerPage");
        return $result;
    }

    function selectCount()
    {
        $result = mysqli_query($this->dbcon, "select count(id) as num from itemdata");
        return $result;
    }
    function dataBorrow()
    {
        $result = mysqli_query($this->dbcon, "SELECT  
        itemdata.id,detail,itemCode,borrow.br_id ,borrow.activity , borrow.location ,borrow.br_date , borrow.br_time
        FROM `itemdata`,borrow WHERE itemdata.id = borrow.id  
        AND borrow.status = 0");
        return $result;
    }
    function dataBackAll()
    {
        $result = mysqli_query($this->dbcon, "SELECT  
        itemdata.id,detail,itemCode,back.bk_id ,back.bk_time 
        FROM `itemdata`,back  WHERE itemdata.id = back.id ORDER BY back.bk_time DESC");
        return $result;
    }
    function dataBack()
    {
        $result = mysqli_query($this->dbcon, "SELECT  
        itemdata.id,detail,itemCode,borrow.br_id ,borrow.activity , borrow.location 
        FROM `itemdata`,borrow WHERE itemdata.id = borrow.id  
       AND borrow.status = 1");
        return $result;
    }
    function selectCountData()
    {
        $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_sum FROM itemdata");
        return $result;
    }

    function selectTotelBorrow()
    {
        $result = mysqli_query($this->dbcon, "SELECT  
        itemdata.id,detail,itemCode,borrow.br_id ,borrow.activity , borrow.location as totel
        FROM `itemdata`,borrow WHERE itemdata.id = borrow.id  ");
        return $result;
    }

    function selectCountTotelBorrow()
    {
        $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total FROM borrow ");
        return $result;
    }
    function selectCountBorrow()
    {
        $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_borrow FROM borrow WHERE status = 0");
        return $result;
    }

    function selectCountBackAll()
    {
        $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_backAll FROM borrow");
        return $result;
    }
    function selectCountBack()
    {
        $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_back FROM borrow WHERE status = 1");
        return $result;
    }
    function selectWhereId($tb_id)
    {
        $result = mysqli_query($this->dbcon, "SELECT itemCode FROM itemdata WHERE id = $tb_id ");
        return $result;
    }

    function selectWhereId2($tb_id)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata WHERE id = $tb_id ");
        return $result;
    }

    function insertBorrow($itemcode, $activity, $location, $br_date)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO borrow(id,activity,location,br_date,status) values(
                                            (select id from itemdata where itemCode = '$itemcode'),
                                            '$activity','$location','$br_date',0)");
        return $result;
    }

    function insertBack($itemcode, $problem)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO back(id,br_id,bk_problem) values(
                                            (select id from itemdata where itemCode = '$itemcode'),
                                            (SELECT br_id FROM borrow,itemdata where borrow.id = itemdata.id and itemCode = '$itemcode' and borrow.status = 0),
                                            '$problem')");
        return $result;
    }

    function updateStatusBorrow()
    {
        $result = mysqli_query($this->dbcon, "UPDATE borrow set status = 1 where br_id in (SELECT br_id FROM back);");
        return $result;
    }

    function selectBorrow()
    {
        $result = mysqli_query($this->dbcon, "SELECT *,borrow.status br_stat FROM borrow,itemdata where borrow.id = itemdata.id  order by br_id desc");
        return $result;
    }

    function selectBorrowItem()
    {
        $result = mysqli_query($this->dbcon, "SELECT borrow.id br_id,detail,brand FROM borrow,itemdata where borrow.id = itemdata.id group by borrow.id");
        return $result;
    }

    function selectCountTreasury()
    {
        $result = mysqli_query($this->dbcon, "SELECT detail,brand, borrow.status br_status,itemdata.status item_status, count(*) total from ceitdb.itemdata left join ceitdb.borrow 
                                                on itemdata.id = borrow.id group by detail,brand,borrow.status,itemdata.status;");
        return $result;
    }

    function selectUserWhere($user, $pass)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM user WHERE user_name = '$user' AND user_pass = '$pass' ");
        return $result;
    }
}

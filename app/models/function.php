<?php

define('DB_SERVER', '172.19.0.1:9906');
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


    function selectWhereId($tb_id)
    {
        $result = mysqli_query($this->dbcon, "SELECT itemCode FROM itemdata WHERE id = $tb_id ");
        return $result;
    }

    function insertBorrow($itemcode, $activity, $location, $br_date)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO borrow(id,activity,location,br_date,status) values(
                                            (select id from itemdata where itemCode = '$itemcode'),
                                            '$activity','$location','$br_date',0)");
        return $result;
    }

    function insertBack($itemcode)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO back(id,br_id) values(
                                            (select id from itemdata where itemCode = '$itemcode'),
                                            (SELECT br_id FROM borrow,itemdata where borrow.id = itemdata.id and itemCode = '$itemcode' and borrow.status = 0))");
        return $result;
    }

    function updateStatusBorrow()
    {
        $result = mysqli_query($this->dbcon, "UPDATE borrow set status = 1 where br_id in (SELECT br_id FROM back );");
        return $result;
    }

    function selectBorrow()
    {
        $result = mysqli_query($this->dbcon, "SELECT *,borrow.status br_stat FROM borrow,itemdata where borrow.id = itemdata.id  order by br_id desc");
        return $result;
    }

    function selectCountItem()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM borrow,itemdata ");
        return $result;
    }
}

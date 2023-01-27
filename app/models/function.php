<?php

define('DB_SERVER', '172.17.0.1:9906');
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

    function selectAll() {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata");
        return $result;
    }
    
    function selectWhereCode($itemCode) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata WHERE itemCode IN ($itemCode) ");
        return $result;
    }

    function selectPage($startRow,$rowPerPage) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM itemdata limit $startRow,$rowPerPage");
        return $result;
    }

    function selectCount() {
        $result = mysqli_query($this->dbcon, "select count(id) as num from itemdata");
        return $result;
    }

    
    function selectWhereId($tb_id) {
        $result = mysqli_query($this->dbcon, "SELECT itemCode FROM itemdata WHERE id = $tb_id ");
        return $result;
    }
}

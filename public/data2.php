<?php

require_once "../app/models/function.php";

$selectAll = new DB_con();
$sql = $selectAll->selectAll();
while ($row = mysqli_fetch_array($sql)) {
?>
    
        <center>
            <td> 
                <?php echo $row["id"] ?>
            </td>
            <td>
                <?php echo $row["updateTime"] ?>
            </td>
            <td>
                <?php echo $row["itemCode"] ?>
            </td>
            <td>
                <?php echo $row["detail"] ?>
            </td>
            <td>
                <?php echo $row["checkInDate"] ?>
            </td>
            <td>
                <?php echo $row["brand"] ?>
            </td>
            <td>
                <?php echo $row["serialNumber"] ?>
            </td>
            <td>
                <?php echo $row["price"] ?>
            </td>
            <td>
                <?php echo $row["refDoc"] ?>
            </td>
            <td>
                <?php echo $row["room"] ?>
            </td>
        </center>
<?php } ?>
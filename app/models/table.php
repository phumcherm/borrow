<div style="max-width: 1600px;margin-left: auto;">
    <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
    <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;">
        <thead class="table-dark">
            <th>
                <center>ลำดับ</center>
            </th>
            <th>
                <center>รายการ</center>
            </th>
            <th>
                <center>ห้อง-แผนก</center>
            </th>
            <th>
                <center>วันที่ยืม</center>
            </th>
            <th>
                <center>วันที่คืน</center>
            </th>
        </thead>
        <?php for ($i = 0; $i < 5; $i++) {
        ?>
            <tbody>
                <td>
                    <center><?php echo $i ?></center>
                </td>
                <td>
                    <center>สาย HDMI </center>
                </td>
                <td>
                    <center>ศนท.</center>
                </td>
                <td>
                    <center>12-12-2565</center>
                </td>
                <td>
                    <center>30-12-2565</center>
                </td>
            </tbody>
        <?php } ?>
    </table>
</div>
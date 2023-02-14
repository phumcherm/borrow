<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    /*chart */
    .graphBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-gap: 20px;
        min-height: 200px;
    }

    .graphBox .box {
        position: relative;
        background: #fff;
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
    }

    .BoxTable {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;

        grid-gap: 30px;
        min-height: 200px;
    }

    .BoxTable .boxt {
        position: relative;
        background: #fff;
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
    }

    @media(max-width: 991px) {
        .graphBox {
            grid-template-columns: 1fr;
            height: auto;
        }
    }
</style>

<body>
    <div class="graphBox">
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <p style="font-size: 36px;text-align: center;color: #E6581D;">จำนวนแจ้งซ่อมครุภัณฑ์</p>
            <select required name="txt_bed" style="padding:10px ;width: 70%; border-color: #E6581D; box-shadow: rgba(0, 0, 0, 0.11) 0px 5px 5px  ;">
                <optgroup label="เลือกดูการใช้งาน">
                    <option id="y" value="">รายปี</option>
                    <option id="m" value="">รายเดือน</option>
                    <option id="d" value="">รายวัน</option>
            </select>
            <button class="btn btn-primary" style="padding:8px ;width: 20%; margin: 12px;">ค้นหา</button>
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <p style="font-size: 36px;text-align: center;color: #E6581D;">จำนวนแจ้งซ่อมครุภัณฑ์</p>

            <select required name="txt_bed" style="padding:10px ;width: 70%; border-color: #E6581D; box-shadow: rgba(0, 0, 0, 0.11) 0px 5px 5px  ;">
                <optgroup label="เลือกดูการใช้งาน">
                    <option id="y" value="">รายปี</option>
                    <option id="m" value="">รายเดือน</option>
                    <option id="d" value="">รายวัน</option>
            </select>
            <button class="btn btn-primary" style="padding:8px ;width: 20%; margin: 12px;">ค้นหา</button>
            <div>
                <canvas id="testChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Table report -->
    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <p style="font-size: 36px;text-align: center;color: #E6581D;">รายการแจ้งซ่อมครุภัณฑ์</p>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายวัน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายเดือน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายปี</button>
            <br><br>

            <div class="table-container">
                <table class="table" id="data" style="text-align: center;">
                    <thead style="color:white; background-color:#E6581D;">
                        <tr>
                            <th>รหัสยืม</th>
                            <th>รหัสครุภัณฑ์</th>
                            <th>ชื่ออุปกรณ์</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $selectAll = new DB_con();
                        $sql = $selectAll->dataBorrow();
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td data-label="รหัสยืม."><?php echo $row['br_id'] ?></td>
                                <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td><button class="btn btn-primary button" data-toggle="modal" data-target="#showborrow"> ข้อมูล</button></td>
                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
            </div>


            <script>
                const numChart = document.getElementById('myChart');
                const timeChart = document.getElementById('testChart');
                new Chart(numChart, {
                    type: 'polarArea',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

                new Chart(timeChart, {
                    type: 'bar',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>
            <!-- chart -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
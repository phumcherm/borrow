<script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    video {
    video {
        border-radius: 7px;
    }

    #qr-shaded-region {
        border-radius: 7px;
    }

    #reader {
        width: 600px;
        border-radius: 7px;
    }

    #result {
        text-align: center;
        font-size: 1.5rem;
        border-radius: 7px;
    }

    #html5-qrcode-button-camera-start {
        /* width: 400px; */
        /* content: "  เปิดกล้อง "; */
        background-color: green;
        border-radius: 7px;
    }
</style>
<main>
    <br>
    <div id="reader"></div>
    <!-- <div id="result"></div> -->
    <br>
    <br>
    <!-- <input type="text" id="result" name="result"> -->
    <!-- <h2 id="data4" name="data4">555 :</h2> -->
</main>
<script>
    var beepsound = new Audio('./sound/scanner-beeps-barcode.mp3');
    // audio.play();
    const scanner = new Html5QrcodeScanner('reader', {
        qrbox: {
            width: 300,
            height: 300,
            // textBox: "เปิด"
        },
        fps: 1,

    });

    function scaner() {

        scanner.render(success, error);
    }

    const itemCode = []
    const arr_id = []

    function success(code) {


        // const urlParams = new URLSearchParams(queryString);
        // console.log("url" + urlParams)

        // var html = ""
        // for (var i = 0; i < itemCode.length; i++) {
        //     html += "<tr>";
        //     html += "<td>" + itemCode[i] + "</td>";
        //     html += "</tr>";
        // }
        // document.getElementById("data").innerHTML = html;


        // tableFunc()
        modalFunc(code)
        // show_item()

        scanner.clear();
        document.getElementById('reader').innerHTML = "";
        beepsound.play();
    }

    console.log(itemCode)

    function error(err) {
        console.error(err);
        console.error("ไม่พบ QR CODE");
    }

    function modalFunc(code) {
        var str_code = code;
        console.log(str_code)

        var ajax = new XMLHttpRequest();
        // console.log(ajax)
        var method = "GET";
        var url = "data4.php";
        var data = "?modalCode=" + str_code;
        var asynchronous = true;

        ajax.open(method, url + data, asynchronous);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                modal.style.display = "block";
                var data = JSON.parse(this.responseText);
                // console.log(data);

                for (var a = 0; a < data.length; a++) {
                    var id = data[a].id;
                    var tb_itemCode = data[a].itemCode;
                    var detail = data[a].detail;
                    var brand = data[a].brand;
                    var room = data[a].room;


                    // console.log(tb_itemCode)
                    document.getElementById("md_detail").value = detail;

                    document.getElementById("md_id").value = id;

                    document.getElementById("md_itemCode").value = tb_itemCode;

                    document.getElementById("md_brand").value = brand;

                    document.getElementById("md_room").value = room;

                }

            }
        }
    }

    function tableFunc() {

        console.log(itemCode)
        var str_code = "'" + itemCode.join("','") + "'";
        console.log(str_code)

        var ajax = new XMLHttpRequest();
        console.log(ajax)
        var method = "GET";
        var url = "data4.php";
        var data = "?code=" + str_code;
        var asynchronous = true;

        ajax.open(method, url + data, asynchronous);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (itemCode.length === 0) {
                var html = ""
                // for (var i = 0; i < itemCode.length; i++) {
                html += "<p><td colspan='10' class='text-center'>No data available</td></p>"
                // }
            } else if (this.readyState == 4 && this.status == 200) {


                var data = JSON.parse(this.responseText);
                console.log(data);

                var html = "";

                for (var a = 0; a < data.length; a++) {
                    var id = data[a].id;
                    var updateTime = data[a].updateTime;
                    var tb_itemCode = data[a].itemCode;
                    var detail = data[a].detail;
                    var checkInDate = data[a].checkInDate;
                    var brand = data[a].brand;
                    var serialNumber = data[a].serialNumber;
                    var price = data[a].price;
                    var refDoc = data[a].refDoc;
                    var room = data[a].room;

                    // console.log(tb_itemCode)

                    html += "<tr>";
                    html += "<center>";
                    html += "<td data-label='ชื่อครุภัณฑ์.'>" + id + "</td>";
                    html += "<td data-label='เวลา.'>" + updateTime + "</td>";
                    html += "<td data-label='ไอเทมโคเด.'>" + tb_itemCode + "</td>";
                    html += "<td data-label='ชื่อครุภัณฑ์.'>" + detail + "</td>";
                    html += "<td data-label='checkInDate.'>" + checkInDate + "</td>";
                    html += "<td data-label='brand.'>" + brand + "</td>";
                    html += "<td data-label='serialNumber.'>" + serialNumber + "</td>";
                    html += "<td data-label='price.'>" + price + "</td>";
                    html += "<td data-label='refDoc.'>" + refDoc + "</td>";
                    html += "<td data-label='room.'>" + room + "</td>";
                    html += "<td onclick='del_Func(" + id + ")'>" + "<a  style='padding: 8px 25px;background-color: #ff5722; cursor: pointer;border-radius: 7px;'><i class='fa-sharp fa-solid fa-xmark'" +
                        "style='margin-right: 0 px; '></i></a>" + "</td>";
                    html += "</center>";
                    html += "</tr>";
                    // console.log(tb_itemCode)



                    // document.getElementById("del").onclick = function() {
                    //     del_itemcode(itemCode)
                    // };

                }

                const indexId = arr_id.findIndex(object => object === id);

                if (indexId === -1) {
                    arr_id.push(id)
                }

                document.getElementById("data4").value = itemCode;


            }

            document.getElementById("data").innerHTML = html;
            
        scanner.clear();
        document.getElementById('reader').innerHTML = "";
        }
    }

    // document.getElementById("del").onclick = function() {
    //     // del_itemcode(this.itemCode)
    //     document.getElementById("data4").innerHTML = "ได้ละะะะะะะะะะะะะะะ!!"
    // };

    function show_item() {
        console.log("นี่คือ :" + itemCode)
    }

    function myFunction(x) {
        alert("Row index is: " + x.rowIndex);
    }

    function del_itemcode(code) {
        console.log("GOGO : " + code)
        const index = itemCode.indexOf(code);
        if (index > -1) { // only splice array when item is found
            itemCode.splice(index, 1); // 2nd parameter means remove one item only
        }
        tableFunc()
    }

    function ModalNull() {

        document.getElementById("md_detail").value = "";

        document.getElementById("md_id").value = "";

        document.getElementById("md_itemCode").value = "";

        document.getElementById("md_brand").value = "";

        document.getElementById("md_room").value = "";
        scanner.render(success, error);
        modal.style.display = "none";
        tableFunc()
    }

    function del_Func(tb_id) {
        // var str_code = "'" + itemCode.join("','") + "'";
        console.log(tb_id)

        var ajax = new XMLHttpRequest();
        // console.log(ajax)
        var method = "GET";
        var url = "data4.php";
        var data = "?tb_id=" + tb_id;
        var asynchronous = true;

        ajax.open(method, url + data, asynchronous);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);

                const index = itemCode.indexOf(data.itemCode);
                if (index > -1) { // only splice array when item is found
                    itemCode.splice(index, 1); // 2nd parameter means remove one item only
                    tableFunc()
                }
                // itemCode.length = 0
                // console.log("del = " + itemCode)

                console.log(itemCode);
                tableFunc()

                // document.getElementById("data4").innerHTML = data.itemCode;
            }

            // document.getElementById("data4").innerHTML = data;
        }
        return tb_id
    }



    // show_item()
</script>
<script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #reader {
        width: 600px;
    }

    #result {
        text-align: center;
        font-size: 1.5rem;
    }

    #html5-qrcode-button-camera-start {
        /* width: 400px; */
        /* content: "  เปิดกล้อง "; */
        background-color: green;
        border-radius: 7px;
    }
</style>
<main>
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
    scanner.render(success, error);

    const itemCode = []

    function success(code) {

        const index = itemCode.findIndex(object => object === code);

        if (index === -1) {
            itemCode.push(code)
        }

        // var str_code = "'" + itemCode.join("','") + "'";
        // console.log(str_code)
        console.log(itemCode)

        // const urlParams = new URLSearchParams(queryString);
        // console.log("url" + urlParams)

        // var html = ""
        // for (var i = 0; i < itemCode.length; i++) {
        //     html += "<tr>";
        //     html += "<td>" + itemCode[i] + "</td>";
        //     html += "</tr>";
        // }
        // document.getElementById("data").innerHTML = html;


        tableFunc()
        show_item()
        // scanner.clear();
        // document.getElementById('reader').remove();
        beepsound.play();
    }

    console.log(itemCode)

    function error(err) {
        console.error(err);
        console.error("ไม่พบ QR CODE");
    }

    function tableFunc() {
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
                    html += "<td>" + id + "</td>";
                    html += "<td>" + updateTime + "</td>";
                    html += "<td>" + tb_itemCode + "</td>";
                    html += "<td>" + detail + "</td>";
                    html += "<td>" + checkInDate + "</td>";
                    html += "<td>" + brand + "</td>";
                    html += "<td>" + serialNumber + "</td>";
                    html += "<td>" + price + "</td>";
                    html += "<td>" + refDoc + "</td>";
                    html += "<td>" + room + "</td>";
                    html += "<td onclick='del_Func(" + id + ")'>" + "<a style='padding: 8px 25px;background-color: #ff5722;border-radius: 7px;'>X</a>" + "</td>";
                    html += "</tr>";
                    // console.log(tb_itemCode)


                    // document.getElementById("del").onclick = function() {
                    //     del_itemcode(itemCode)
                    // };

                }

                // document.getElementById("data4").innerHTML = data;


            }

            document.getElementById("data").innerHTML = html;
        }
    }

    // document.getElementById("del").onclick = function() {
    //     // del_itemcode(this.itemCode)
    //     document.getElementById("data4").innerHTML = "ได้ละะะะะะะะะะะะะะะ!!"
    // };

    function del_test(code234) {
        document.getElementById("data4").innerHTML = code234
        // console.log(code234)
        console.log("del = " + code234)
        tableFunc()
        return code234
    }

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

                document.getElementById("data4").innerHTML = data.itemCode;
            }

            // document.getElementById("data4").innerHTML = data;
        }
        return tb_id
    }

    // show_item()
</script>
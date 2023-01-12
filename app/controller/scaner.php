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
    <input type="text" id="result" name="result">
</main>
<input type="text" id="code" name="code">
<script>
    const scanner = new Html5QrcodeScanner('reader', {
        qrbox: {
            width: 250,
            height: 250,
            // textBox: "เปิด"
        },
        fps: 20,

    });
    scanner.render(success, error);

    function success(code) {
        const itemCode = code;
        console.log(itemCode)
        document.getElementById('result').value = (itemCode);

        // beepsound.onended = function() {
        //     beepsound.muted = true;
        // };
        // var itemCode = $result
        // document.getElementById("demo").innerHTML = (result);
        // document.(itemCode);

        scanner.clear();
        document.getElementById('reader').remove();
        beepsound.play();
        // echo  (itemCode);
    }

    // document.getElementById('result').value = (itemCode);

    function error(err) {
        console.error(err);
    }
</script>

<script>
    var mysql = require('mysql');

    var con = mysql.createConnection({
        host: "172.17.0.1:9906",
        user: "ceitdb",
        password: "12345678",
        database: "ceitdb"
    });

    con.connect(function(err) {
        document.getElementById('holo').value = (itemCode);
        document.getElementById('code').value = (code);
        if (err) throw err;
        //Select all customers and return the result object:
        var sql = 'SELECT detail FROM itemdata where itemCode = ? ';
        con.query(sql, [code], function(err, code, fields) {
            if (err) throw err;
            console.log(code);
        });
    });
</script>
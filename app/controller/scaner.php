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

    function success(result) {
        const itemCode = document.getElementById("result");

        document.getElementById('result').value = (result);
        // var itemCode = $result
        // document.getElementById("demo").innerHTML = (result);
        // document.(itemCode);
        scanner.clear();
        document.getElementById('reader').remove();
        // echo  (itemCode);
    }

    function error(err) {
        console.error(err);
    }
    // <?php echo "หวัดดี"  ?>
</script>
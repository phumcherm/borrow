<!-- <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
    <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span>
</header> -->
<!-- Navbar (sit on top) -->
<style>
    /* a {
        color: white;
    }

    a:hover {
        background-color: #dbd6d6;
        color: white;
        text-decoration: none;
    } */
</style>

<button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>

<nav style="padding: 15px;">
    <h5>
        <ul class="menu" id="menu" style="margin: 0;">
            <li class="items button"><a href="index.php javascript:void(0);">หน้าหลัก</a></li>
            <li class="items button"><a href="borrow.php">ยืมวัสดุ ครุภัณฑ์</a></li>
            <li class="items button"><a href="back.php">คืนวัสดุ ครุภัณฑ์</a></li>
            <li class="items button"><a href="#designers">คลังวัสดุ ครุภัณฑ์</a></li>
            <li class="items button"><a href="login.php">ออกจากระบบ</a></li>
        </ul>
    </h5>


    <div class="w3-bar w3-padding " style="width: auto; margin-left: auto;">
        <a href="index.php">
            <h1 style="margin-left: 80px; color: white;">E - Borrow
                <!-- Right-sided navbar links. Hide them on small screens -->
            </h1>
        </a>
    </div>
</nav>

<script>
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
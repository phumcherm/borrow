<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    <link id="pagestyle" href="./assets/css/normalize.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!--  -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="PwOtZEQuVE8QU1ebwM3FQhoICPnLTDikrVUdlg4d"> 
    <link href="http://demo-freelancer-crm.quickadminpanel.com/css/adminltev3.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet">
    <link href="http://demo-freelancer-crm.quickadminpanel.com/css/custom.css" rel="stylesheet">-->










    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-79616612-8');
    </script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        @font-face {
            font-family: SUT_Regular;
            src: url(SUT-Fonts/SUT_Regular_ver_1.00.ttf);
        }

        @font-face {
            font-family: SUT_Bold;
            src: url(SUT-Fonts/SUT_Bold_ver_1.00.ttf);
        }


        body {
            font-family: SUT_Bold;
            /* margin: 0; */
        }

        * {

            font-family: SUT_Regular;
        }

        input {
            border-radius: 7px;
            border: none;
            max-width: 200px;
            height: 40px;
            padding: 20px;
        }

        h1 {
            font-family: SUT_Regular;
            letter-spacing: 1px;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 8em;
        }

        h2,
        h3,

        h4,
        h5,
        h6 {
            font-family: SUT_Regular;
            letter-spacing: 1px;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 2.5em;
        }



        .colorwhite {
            color: #ffffff;
        }

        .colororage {
            color: #EC5A0F;
        }


        * {
            margin: 0;
            padding: 0;
        }

        i {
            margin-right: 10px;
        }

        /*----------bootstrap-navbar-css------------*/
        .navbar-logo {
            padding: 15px;
            color: #EC5A0F;
        }

        .navbar-mainbg {
            background-color: #EC5A0F;
            padding: 0px;
        }

        #navbarSupportedContent {
            overflow: hidden;
            position: relative;
        }

        #navbarSupportedContent ul {
            padding: 0px;
            margin: 0px;
        }

        #navbarSupportedContent ul li a i {
            margin-right: 10px;
        }

        #navbarSupportedContent li {
            list-style-type: none;
            float: left;
        }

        #navbarSupportedContent ul li a {
            color: #FFFFFF;
            /*rgba(255, 255, 255, 0.5)*/
            text-decoration: none;
            font-size: 17px;
            display: block;
            padding: 30px 30px;
            transition-duration: 0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;

        }

        #navbarSupportedContent>ul>li.active>a {
            color: #EC5A0F;
            background-color: transparent;

        }

        #navbarSupportedContent a:not(:only-child):after {
            content: "\f105";
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 14px;
            font-family: "Font Awesome 5 Free";
            display: inline-block;
            padding-right: 3px;
            vertical-align: middle;
            font-weight: 900;
            transition: 0.5s;
        }

        #navbarSupportedContent .active>a:not(:only-child):after {
            transform: rotate(90deg);
        }

        .hori-selector {
            display: inline-block;
            position: absolute;
            height: 100%;
            top: 0px;
            left: 0px;
            transition-duration: 0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            background-color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            margin-top: 10px;
        }

        .hori-selector .right,
        .hori-selector .left {
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: #fff;
            bottom: 10px;
        }

        .hori-selector .right {
            right: -25px;
        }

        .hori-selector .left {
            left: -25px;
        }

        .hori-selector .right:before,
        .hori-selector .left:before {
            content: '';
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #EC5A0F;
        }

        .hori-selector .right:before {
            bottom: 0;
            right: -25px;
        }

        .hori-selector .left:before {
            bottom: 0;
            left: -25px;
        }


        @media(min-width: 992px) {
            .navbar-expand-custom {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-custom .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-custom .navbar-toggler {
                display: none;
            }

            .navbar-expand-custom .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
        }


        @media (max-width: 991px) {
            #navbarSupportedContent ul li a {
                padding: 12px 30px;
            }

            .hori-selector {
                margin-top: 0px;
                margin-left: 10px;
                border-radius: 0;
                border-top-left-radius: 25px;
                border-bottom-left-radius: 25px;
            }

            .hori-selector .left,
            .hori-selector .right {
                right: 10px;
            }

            .hori-selector .left {
                top: -25px;
                left: auto;
            }

            .hori-selector .right {
                bottom: -25px;
            }

            .hori-selector .left:before {
                left: -25px;
                top: -25px;
            }

            .hori-selector .right:before {
                bottom: -25px;
                left: -25px;
            }
        }
    </style>
</head>

<!DOCTYPE html>
<html>


<button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>


<body>

    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand " href="#">
            <h3 style="margin-left: 60px;">E - Borrow
                <!-- Right-sided navbar links. Hide them on small screens -->
            </h3>
        </a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                
                <li class="nav-item-active">
                    <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i>หน้าหลัก</a>
                </li>

              
                <li class=" nav-item">
                    <a class="nav-link  " type="button" href="report_admin.php" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-address-book"></i>รายงาน</a>
    
                   
                </li>
              <!--   <a href="nameborrow.php" class="list-group-item " style="background-color: #ff5722; width: 200px; height: 10px;padding: 20px;">
                    <center>รายชื่อผู้ยืม</center>
                </a>
                <a href="category.php" class="list-group-item " style="background-color: #ff5722; width: 200px; height: 10px;padding: 20px;">
                    <center>หมวดหมู่</center>
                </a>

                <a href="historyofrepair.php" class="list-group-item " style="background-color: #ff5722; width: 200px; height: 10px;padding: 20px;">
                    <center> ประวัติการเเจ้งซ่อม</center>
                </a> -->
              <!--   <li class=" nav-item">
                    <a class="nav-link " type="button" href="report_admin.php"><i class="far fa-address-book"></i>รายงาน</a>

                </li>
 -->
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="far fa-chart-bar"></i>ออกจากระบบ</a>
                </li>

            </ul>
        </div>
    </nav>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>

    <!--  navbarเด้ง -->
    <script>
        function test() {
            var tabsNewAnim = $('#navbarSupportedContent');
            var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
            var activeItemNewAnim = tabsNewAnim.find('.active');
            var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
            var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
            var itemPosNewAnimTop = activeItemNewAnim.position();
            var itemPosNewAnimLeft = activeItemNewAnim.position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
            $("#navbarSupportedContent").on("click", "li", function(e) {
                $('#navbarSupportedContent ul li').removeClass("active");
                $(this).addClass('active');
                var activeWidthNewAnimHeight = $(this).innerHeight();
                var activeWidthNewAnimWidth = $(this).innerWidth();
                var itemPosNewAnimTop = $(this).position();
                var itemPosNewAnimLeft = $(this).position();
                $(".hori-selector").css({
                    "top": itemPosNewAnimTop.top + "px",
                    "left": itemPosNewAnimLeft.left + "px",
                    "height": activeWidthNewAnimHeight + "px",
                    "width": activeWidthNewAnimWidth + "px"
                });
            });
        }
        $(document).ready(function() {
            setTimeout(function() {
                test();
            });
        });
        $(window).on('resize', function() {
            setTimeout(function() {
                test();
            }, 500);
        });
        $(".navbar-toggler").click(function() {
            $(".navbar-collapse").slideToggle(300);
            setTimeout(function() {
                test();
            });
        });

        // --------------add active class-on another-page move----------
        jQuery(document).ready(function($) {
            // Get current path and find target link
            var path = window.location.pathname.split("/").pop();

            // Account for home page with empty path
            if (path == '') {
                path = 'index.html';
            }

            var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
            // Add active class to target link
            target.parent().addClass('active');
        });

        // Add active class on another page linked
        // ==========================================
        /*  $(window).on('load', function() {
             var current = location.pathname;
             console.log(current);
             $('#navbarSupportedContent ul li a').each(function() {
                 var $this = $(this);
                 // if the current path is like this link, make it active
                 if ($this.attr('href').indexOf(current) !== -1) {
                     $this.parent().addClass('active');
                     $this.parents('.menu-submenu').addClass('show-dropdown');
                     $this.parents('.menu-submenu').parent().addClass('active');
                 } else {
                     $this.parent().removeClass('active');
                 }
             })
         }); */
    </script>


</body>

</html>
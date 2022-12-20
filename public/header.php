<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    <link id="pagestyle" href="./assets/css/normalize.css" rel="stylesheet" />
    <!-- Styles -->


    <style>
        
    </style>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="PwOtZEQuVE8QU1ebwM3FQhoICPnLTDikrVUdlg4d">


        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://demo-freelancer-crm.quickadminpanel.com/css/adminltev3.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet">
        <link href="http://demo-freelancer-crm.quickadminpanel.com/css/custom.css" rel="stylesheet">
        <link id="pagestyle" href="./assets/css/home.css" rel="stylesheet" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-79616612-8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-79616612-8');
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/style.css">
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

            .a {
                color: #ffffff;
                text-decoration: none;
                background-color: transparent;
                -webkit-text-decoration-skip: objects;
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
                color: #fff;
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
                color: #ffffff;
                /*rgba(255, 255, 255, 0.5)*/
                text-decoration: none;
                font-size: 15px;
                display: block;
                padding: 30px 30px;
                transition-duration: 0.6s;
                transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
                position: relative;
            }

            #navbarSupportedContent>ul>li.active>a {
                color: #EC5A0F;
                background-color: transparent;
                transition: all 0.7s;
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

<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
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
        h3 {
            font-family: SUT_Regular;
            letter-spacing: 1px;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 2.5em;
        }

        h4,
        h5,
        h6,

        .fullscreen-block {

            background: red;
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(#5B5B5B, #EC5A0F);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(#5B5B5B, #EC5A0F);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(#5B5B5B, #EC5A0F);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(#5B5B5B, #EC5A0F);
            /* Standard syntax */
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }

        .colorwhite {
            color: #ffffff;
        }

        .colororage {
            color: #EC5A0F;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
    </style>
</head>

<body>
    <div class="fullscreen-block colorwhite">
        <section><b>
                <h1>E - Borrow</h1>
            </b></section>

        <section><b>
                <h3>ระบบ ยืม - คืน วัสดุและครุภัณฑ์ฝ่ายเทคนิควิศวกรรม</h3>
            </b></section>
        <div style="max-width: 600px; height: auto;margin: 25px auto 15px auto;border-radius: 7px; ">
            <div style="border-radius: 7px; ">
                <form class="container  w3-white w3-center " style="width: 30rem; margin: 50px; border-radius: 7px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class=" colororage ">
                        <h3><b>เข้าสู่ระบบ</b></h3>
                        <!-- Email input -->

                        <div>
                            <input type="text" required name="txt_code" minlength="13" maxlength="13" class="form-control form-control-lg" placeholder="หมายเลขบัตรประชาชน">
                        </div>
                        <br>
                        <!-- Password input -->
                        <div>
                            <input type="password" required name="txt_password" minlength="11" maxlength="11" class="form-control form-control-lg" placeholder="รหัสผ่าน (หมายเลขประจำตัว)">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>
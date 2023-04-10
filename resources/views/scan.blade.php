<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الماسح الضوئي</title>

    <style>
        body
        {
            background-color:#f3f3f3;
            height: 200px;
            margin: 0;
            padding: 0;

        }

        .bg-container
        {
            position: absolute;
            top: 20%;
            width: 100%;

        }
        .bg-container2
        {
            position: absolute;
            bottom: 25%;
            right: -60%;
            width: 100%;

        }

        .box
        {
            position: absolute;
            top: 10%;
            transform: rotate(80deg);
            left: 30%;
        }

        .wave {
            position: absolute;
            opacity: .4;
            width: 1200px;
            height: 1000px;
            border-radius: 43%;
        }

        .wave.one {
            animation: rotate 7000ms infinite linear;
            opacity: .1;
            background: rgba(149, 84, 255, 0.31);
        }

        .wave.two {
            animation: rotate 3000ms infinite linear;
            opacity: .1;
            background: rgba(149, 84, 255, 0.31);
        }

        .wave.three {
            animation: rotate 7500ms infinite linear;
            background-color: rgba(149, 84, 255, 0.31);
        }

        .box2
        {
            position: absolute;
            bottom: 10%;
            transform: rotate(20deg);
            right: -30%;
        }

        .wave2 {
            position: absolute;
            opacity: .4;
            width: 800px;
            height: 800px;
            border-radius: 43%;
        }

        .wave2.four {
            animation: rotate 7000ms infinite linear;
            opacity: .1;
            background: rgba(149, 84, 255, 0.31);
        }

        .wave2.five {
            animation: rotate 3000ms infinite linear;
            opacity: .1;
            background: rgba(149, 84, 255, 0.31);
        }

        .wave2.six {
            animation: rotate 7500ms infinite linear;
            background-color: rgba(149, 84, 255, 0.31);
        }


        @keyframes rotate {
            from { transform: rotate(0deg); }
            from { transform: rotate(360deg); }
        }


        #shape10,#shape9,#shape8,#shape1
        {
            transform-box: fill-box;
            transform-origin: center;
            -webkit-animation: rotate-center 2s cubic-bezier(0.445, 0.050, 0.550, 0.950) infinite alternate both;
            animation: rotate-center 2s cubic-bezier(0.445, 0.050, 0.550, 0.950) infinite alternate both;
        }

        #cir1,#cir2,#cir3
        {
            transform-box: fill-box;
            transform-origin: center;
            -webkit-animation: rotate-scale-down-diag-2 2s linear infinite both;
            animation: rotate-scale-down-diag-2 2s linear infinite both;
        }

        #cir4,#cir5,#cir6
        {
            transform-box: fill-box;
            transform-origin: center;
            -webkit-animation: rotate-scale-down-diag-2 1s linear infinite both;
            animation: rotate-scale-down-diag-2 1s linear infinite both;
        }


        #shape15,#shape16,#shape17,#shape18
        {
            transform-box: fill-box;
            transform-origin: center;
            -webkit-animation: rotate-center 2s cubic-bezier(0.445, 0.050, 0.550, 0.950) infinite alternate both;
            animation: rotate-center 2s cubic-bezier(0.445, 0.050, 0.550, 0.950) infinite alternate both;
        }

        #cir7,#cir8,#cir9
        {
            transform-box: fill-box;
            transform-origin: center;
            -webkit-animation: rotate-scale-down-diag-2 2s linear infinite both;
            animation: rotate-scale-down-diag-2 2s linear infinite both;
        }

        #cir10,#cir11,#cir12
        {
            transform-box: fill-box;
            transform-origin: center;
            -webkit-animation: rotate-scale-down-diag-2 1s linear infinite both;
            animation: rotate-scale-down-diag-2 1s linear infinite both;
        }


        /**
         * ----------------------------------------
         * animation rotate-center
         * ----------------------------------------
         */
        @-webkit-keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /**
         * ----------------------------------------
         * animation rotate-scale-down-diag-2
         * ----------------------------------------
         */
        @-webkit-keyframes rotate-scale-down-diag-2 {
            0% {
                -webkit-transform: scale(1) rotate3d(-1, 1, 0, 0deg);
                transform: scale(1) rotate3d(-1, 1, 0, 0deg);
            }
            50% {
                -webkit-transform: scale(0.5) rotate3d(-1, 1, 0, 180deg);
                transform: scale(0.5) rotate3d(-1, 1, 0, 180deg);
            }
            100% {
                -webkit-transform: scale(1) rotate3d(-1, 1, 0, 360deg);
                transform: scale(1) rotate3d(-1, 1, 0, 360deg);
            }
        }
        @keyframes rotate-scale-down-diag-2 {
            0% {
                -webkit-transform: scale(1) rotate3d(-1, 1, 0, 0deg);
                transform: scale(1) rotate3d(-1, 1, 0, 0deg);
            }
            50% {
                -webkit-transform: scale(0.5) rotate3d(-1, 1, 0, 180deg);
                transform: scale(0.5) rotate3d(-1, 1, 0, 180deg);
            }
            100% {
                -webkit-transform: scale(1) rotate3d(-1, 1, 0, 360deg);
                transform: scale(1) rotate3d(-1, 1, 0, 360deg);
            }
        }

        label
        {
            position: absolute;
            top: 40%;
            right: 0;
            left: 0;
            width: 200px;
            height: 200px;
            margin: 0 auto;
            background-color: #f72414;
            transform: translateY(-50%);
            border-radius: 50%;
            box-shadow: 0 7px 10px #ffbeb8;
            cursor: pointer;
            transition: 0.2s ease transform, 0.2s ease background-color, 0.2s ease box-shadow;
            overflow: hidden;
            z-index: 1;
            border: 2px solid rgba(0, 0, 0, 0.44);
        }

        label:before
        {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            width: 70px;
            height: 70px;
            margin: 0 auto;
            background-color: #fff;
            transform: translateY(-50%);
            border-radius: 50%;
            box-shadow: inset 0 7px 10px #ffbeb8;
            transition: 0.2s ease width, 0.2s ease height;
            border: 1px solid black;
        }

        label:hover:before
        {
            width: 55px;
            height: 55px;
            box-shadow: inset 0 7px 10px #ff9d96;
        }

        label:active
        {
            transform: translateY(-50%) scale(0.9);
        }

        #tick_mark
        {
            position: absolute;
            top: -1px;
            right: 0;
            left: 0;
            width: 60px;
            height: 60px;
            margin: 0 auto;
            margin-left: 14px;
            transform: rotateZ(-40deg);
        }

        #tick_mark:before, #tick_mark:after
        {
            content: "";
            position: absolute;
            background-color: #fff;
            border-radius: 2px;
            opacity: 0;
            transition: 0.2s ease transform, 0.2s ease opacity;
        }

        #tick_mark:before
        {
            left: 0;
            bottom: 0;
            width: 10px;
            height: 30px;
            box-shadow: -2px 0 5px rgba(0,0,0,0.23);
            transform: translateY(-68px)
        }

        #tick_mark:after
        {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 10px;
            box-shadow: 0 3px 5px rgba(0,0,0,0.23);
            transform: translateX(78px)
        }

        #_checkbox:checked + label
        {
            background-color: #07d410;
            box-shadow: 0 7px 10px #92ff97;
        }

        #_checkbox:checked + label:before
        {
            width: 0;
            height: 0;
        }

        #_checkbox:checked + label #tick_mark:before, #_checkbox:checked + label #tick_mark:after
        {
            transform: translate(0);
            opacity: 1;
        }



        .barcode {
            align-items: center;
            text-align: center;
            width: 35%;
            height: 300px;
            margin: 0% auto;
            margin-bottom: 0rem;
            /* background-color: #ffb9cf; */
            /* width: calc(100% / 4 - 16px); */
            /* background: #fff; */
            /* transition: var(--tran-05); */
            /* box-shadow: 6px 5px 12px #aaaaaa; */
            /* box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); */
        }
        .barcode2 {
            align-items: center;
            text-align: center;
            width: 35%;
            margin: 5% auto;



        }
        .barcode .barcode_img {
            width: 100%;
        }
        .scan {
            margin-top: 4rem;
            margin-bottom: 1rem;
            /* margin-top: 10%; */
            border: none;
            border-radius: 1.5rem;
            padding: 10px 60px;
            background: rgba(149, 84, 255, 0.31);
            color: #6F50FF;
            font-weight: 600;
            /* width: 20%; */
            cursor: pointer;
            border: 1px solid #6F50FF;
            /* margin-left: 100px; */
        }

        .scan:hover {
            /* margin-top: 10%; */
            border: none;
            border-radius: 1.5rem;
            padding: 10px 60px;
            background: #6F50FF;
            color: #fff;
            font-weight: 600;
            /* width: 20%; */
            cursor: pointer;
            border: 1px solid #6F50FF;
        }

        .scan2 {
            /*margin-top: 1rem;*/
            margin-bottom: 1rem;
            /* margin-top: 10%; */
            border: none;
            border-radius: 1.5rem;
            padding: 10px 55px;
            background:#6F50FF;
            color: #fff;
            font-weight: 600;
            /* width: 20%; */
            cursor: pointer;
            border: 1px solid #6F50FF;
            /* margin-left: 100px; */
        }

        .scan2:hover {
            /* margin-top: 10%; */
            border: none;
            border-radius: 1.5rem;
            padding: 10px 60px;
            background: rgba(149, 84, 255, 0.31);

            color: #6F50FF;
            font-weight: 600;
            /* width: 20%; */
            cursor: pointer;
            border: 1px solid #6F50FF;
        }

        .scan_title {
            margin-top: 40px;
            margin-left: 500px;
            color: #6F50FF;
            width: 100%;
            text-align: center;
        }
        .scan_form {
            margin-left: 100px;
        }
        .scanner_ul {
            color: rgb(116 116 116);
            list-style: none;
            font-size: 1rem;
            padding: 10px;
        }
        .scanner_ul li {
            padding: 1px;
        }
        .scanner_container {
            width: 80%;
            margin: 0 auto;
        }
        #last-barcode {
            display: none;
        }
        .scanner_print {
            font-size: 1rem;
            color: rgb(116 116 116);

        }
        #scanner_add {
            /* text-decoration: none; */
            color: #6F50FF;
            font-size: 1.2rem;
            cursor: pointer;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="scanner_container" dir="rtl">
    @include('flash-message')

    <!--this is for background dots animation--->
        <div class="bg-container">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="500px">
                <path id="shape1" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M-0.011,9.318 L8.682,6.988 L11.011,15.682 L2.318,18.011 L-0.011,9.318 Z"></path>
                <path id="shape8" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M607.694,164.319 L612.680,161.693 L615.306,166.680 L610.320,169.305 L607.694,164.319 Z"></path>
                <path id="shape9" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M667.343,205.646 L679.152,213.179 L671.620,224.988 L659.810,217.456 L667.343,205.646 Z"></path>
                <path id="shape10" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M915.839,-0.008 L924.997,5.833 L919.156,14.991 L909.998,9.150 L915.839,-0.008 Z"></path>
                <path id="cir6" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M989.000,93.000 C993.418,93.000 997.000,96.582 997.000,101.000 C997.000,105.418 993.418,109.000 989.000,109.000 C984.582,109.000 981.000,105.418 981.000,101.000 C981.000,96.582 984.582,93.000 989.000,93.000 Z"></path>
                <path id="cir5" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M1165.000,8.000 C1167.761,8.000 1170.000,10.238 1170.000,13.000 C1170.000,15.761 1167.761,18.000 1165.000,18.000 C1162.239,18.000 1160.000,15.761 1160.000,13.000 C1160.000,10.238 1162.239,8.000 1165.000,8.000 Z"></path>
                <path id="cir4" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M1303.500,118.000 C1304.881,118.000 1306.000,119.119 1306.000,120.500 C1306.000,121.880 1304.881,123.000 1303.500,123.000 C1302.119,123.000 1301.000,121.880 1301.000,120.500 C1301.000,119.119 1302.119,118.000 1303.500,118.000 Z"></path>
                <path id="cir3" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M61.000,112.000 C62.657,112.000 64.000,113.343 64.000,115.000 C64.000,116.657 62.657,118.000 61.000,118.000 C59.343,118.000 58.000,116.657 58.000,115.000 C58.000,113.343 59.343,112.000 61.000,112.000 Z"></path>
                <path id="cir2" fill-rule="evenodd" fill="rgb(74, 92, 246)" d="M265.500,-0.000 C271.299,-0.000 276.000,4.701 276.000,10.500 C276.000,16.299 271.299,21.000 265.500,21.000 C259.701,21.000 255.000,16.299 255.000,10.500 C255.000,4.701 259.701,-0.000 265.500,-0.000 Z"></path>
                <path id="cir1" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M185.500,131.000 C187.985,131.000 190.000,133.015 190.000,135.500 C190.000,137.985 187.985,140.000 185.500,140.000 C183.015,140.000 181.000,137.985 181.000,135.500 C181.000,133.015 183.015,131.000 185.500,131.000 Z"></path>
            </svg>
        </div>
        <!--End----->


        <div class="box">
            <div class="wave one"></div>
            <div class="wave two"></div>
            <div class="wave three"></div>
        </div>

        <div id="tick_mark"></div>

        </label>

    <div class="scan_title">
        <h2> الماسح الضــوئي</h2>
        <ul class="scanner_ul">
            <li> بأمكانك مسح الكود على الاستمارة لمقارنة جميع البيانات الخاصة بالمواطن</li>
            <li>بعد التأكد من البيانات يرجى تفعيل البطاقة</li>
        </ul>

    </div>
    <div class="barcode">
        <img src="barcode.png" alt="" class="barcode_img">

    </div>
    <div class="barcode2">
        <p class="scanner_print"> لأتـمام عملية الماسح الضوئي يرجى الضغط على الزر ادناه</p>
        <button class="scan" id="scan"> المــاسح الضــوئي</button>
        <p class="scanner_print">بعد أتمام عملية الماسح الضوئي يرجى الضغط على الزر ادناه لمقارنة بيانات المواطن مع المستمسكات</p>
    </div>
    <form action="{{route('check')}}" method="post" style="text-align: center;">
        @csrf
        @method('POST')
        <input type="text" name="barcode" value="" id="last-barcode">
{{--        <input type="text" name="barcode2" value="">--}}
            <button type="submit" class="scan2">
                مطابقة المعلومات
            </button>
    </form>

        <div class="box2">
            <div class="wave2 four"></div>
            <div class="wave2 five"></div>
            <div class="wave2 six"></div>
        </div>

{{--    <div id="last-barcode"></div>--}}
</div>

<div class="bg-container2">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="500px">
        <path id="shape15" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M-0.011,9.318 L8.682,6.988 L11.011,15.682 L2.318,18.011 L-0.011,9.318 Z"></path>
        <path id="shape16" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M607.694,164.319 L612.680,161.693 L615.306,166.680 L610.320,169.305 L607.694,164.319 Z"></path>
        <path id="shape17" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M667.343,205.646 L679.152,213.179 L671.620,224.988 L659.810,217.456 L667.343,205.646 Z"></path>
        <path id="shape18" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M915.839,-0.008 L924.997,5.833 L919.156,14.991 L909.998,9.150 L915.839,-0.008 Z"></path>
        <path id="cir12" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M989.000,93.000 C993.418,93.000 997.000,96.582 997.000,101.000 C997.000,105.418 993.418,109.000 989.000,109.000 C984.582,109.000 981.000,105.418 981.000,101.000 C981.000,96.582 984.582,93.000 989.000,93.000 Z"></path>
        <path id="cir11" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M1165.000,8.000 C1167.761,8.000 1170.000,10.238 1170.000,13.000 C1170.000,15.761 1167.761,18.000 1165.000,18.000 C1162.239,18.000 1160.000,15.761 1160.000,13.000 C1160.000,10.238 1162.239,8.000 1165.000,8.000 Z"></path>
        <path id="cir10" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M1303.500,118.000 C1304.881,118.000 1306.000,119.119 1306.000,120.500 C1306.000,121.880 1304.881,123.000 1303.500,123.000 C1302.119,123.000 1301.000,121.880 1301.000,120.500 C1301.000,119.119 1302.119,118.000 1303.500,118.000 Z"></path>
        <path id="cir9" fill-rule="evenodd" fill="rgb(93, 203, 250)" d="M61.000,112.000 C62.657,112.000 64.000,113.343 64.000,115.000 C64.000,116.657 62.657,118.000 61.000,118.000 C59.343,118.000 58.000,116.657 58.000,115.000 C58.000,113.343 59.343,112.000 61.000,112.000 Z"></path>
        <path id="cir8" fill-rule="evenodd" fill="rgb(74, 92, 246)" d="M265.500,-0.000 C271.299,-0.000 276.000,4.701 276.000,10.500 C276.000,16.299 271.299,21.000 265.500,21.000 C259.701,21.000 255.000,16.299 255.000,10.500 C255.000,4.701 259.701,-0.000 265.500,-0.000 Z"></path>
        <path id="cir7" fill-rule="evenodd" fill="rgb(35, 23, 123)" d="M185.500,131.000 C187.985,131.000 190.000,133.015 190.000,135.500 C190.000,137.985 187.985,140.000 185.500,140.000 C183.015,140.000 181.000,137.985 181.000,135.500 C181.000,133.015 183.015,131.000 185.500,131.000 Z"></path>
    </svg>
</div>





<script>
    var barcode='';
    var interval;
    var m=document.querySelector("#scan")
    m.addEventListener("click", vv)
    function vv() {
        document.body.style.backgroundColor="#EAEAEA"
        document.addEventListener('keydown', function(evt){
            if (interval)
                clearInterval(interval);
            if (evt.code == 'Enter'){
                if (barcode)
                    handleBarcode(barcode);
                barcode='';
                return;
            }
            if (evt.key != 'Shift')
                barcode += evt.key;
            interval = setInterval( ()=> barcode='', 20);
        } );
        function handleBarcode(scanned_barcode){
            document.querySelector('#last-barcode').value = barcode;
        }
    }

</script>
</body>

</html>

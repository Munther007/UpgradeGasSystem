<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style444.css')}}">
    <script src="https://unpkg.com/pdf-lib"></script>
</head>
<body id="element" dir="">
<!--<div style="width: 40%; height:90px; margin:30px auto;">-->
<!--        @php-->
<!--        echo '<img src="data:image/png;base64,' .  DNS1D::getBarcodePNG($car->random_code, 'C128',2,77,array(1,1,1))  . '" alt="barcode"  />';-->
<!--        @endphp-->
<!--    </div>-->
<div class="top" id="element">
    <div class="container_header">
       <div class="barcode">
            @php
        echo '<img src="data:image/png;base64,' .  DNS1D::getBarcodePNG($car->random_code, 'C128',2,77)  . '" alt="barcode"/>';
            @endphp
        </div>

        <div class="logo_box">
            <img src="{{asset('logo.png')}}" alt="" class="logo">
        </div>

        <div class="text_box">

{{--            <p id="text1">وزارة النفــط</p>--}}
{{--            <p id="text2">هيـــأة تـــوزيع بغـــداد </p>--}}
{{--            <p id="text3"> برمجيات التوزيع والطباعة الرقمية</p>--}}
        {!!  DNS2D::getBarcodeHTML($car->random_code, 'QRCODE'  ,4,4 )!!}
        </div>
    </div>

    <!-- <h1>أستــــمارة طلب تفعيل بيانات المواطني ذات المركبة ال </h1> -->
    <div class="container_table" dir="rtl">
        <h3 id="tilte_main"> الأستمارة الالكترونية الخاصة بالمركبات التي تعمل بمنتوج الكاز</h3>
        <h3 id="title_header">البيـــــانات الشخصـــية :</h3>
        <!-- <div class="wrap_table"  dir="rtl"> -->
        <table>
            <tr>
                <td class="info">أسم المالك</td>
                <td class="data">{{$car->owner_name}}</td>
                <td class="info"> رقم الهوية او الموحدة</td>
                <td class="data">{{$car->id_card_number}} </td>
            </tr>
            <tr>
                <td>رقم الهاتف</td>
                <td>{{$car->mobile}} </td>
                <td>رقم بطاقة السكن</td>
                <td>   {{$car->resident_number}}</td>
            </tr>
            <tr>
                {{-- <td class="info" colspan="3" style="text-align: center">رقم بطاقة التموينية</td>
                <td colspan="3">  {{$car->family_number}}</td> --}}
                <td class="info">رقم بطاقة التموينية</td>
                <td>  {{$car->family_number}}</td>
                <td class="info">محافظة السكن</td>
                <td>  {{$car->government_name}}</td>

            </tr>
        </table>
    </div>
    <div class="container_table" dir="rtl">
        <h3 id="title_header">بيــــانات المـــركبــة :</h3>
        <!-- <div class="wrap_table"  dir="rtl"> -->
        <table>
            <tr>
                <td class="info"> رقم السيارة </td>
                <td class="data">{{$car->car_number}}{{$car->car_letter}}</td>
                {{-- <td class="info">  حرف السيارة</td> --}}
                {{-- <td class="data">{{$car->car_letter}} </td> --}}
                <td class="info">  وزن المركبة </td>
                <td class="data">{{$car->car_weight1}} </td>

            </tr>
            <tr>
                <td> صنف العجلة </td>
                <td>{{$car->number_type}} </td>
                <td>محـــافظة اللوحة   </td>
                <td>{{$car->government_car}}</td>
            </tr>
            <tr>
                <td class="info">رقم الســـنوية </td>
                <td> {{$car->document_number}}</td>
                <td class="info"> نوع المــركبة   </td>
                <td class="data"> {{$car->car_type}} </td>
            </tr>
        </table>
    </div>
    <!-- </div> -->

    <div class="wrapper_notes"  dir="rtl">
        <h3 id="notes_title">ملاحظات</h3>
        <p>.يرجى طباعة الاستمارة و مراجعة الدائرة المعنية وأستصحاب الاستمارة والمستمسكات الخاصة بصاحب المركبة</p>
        <ul class="notes_print" dir="rtl">
            <h3>المستمسكات المطلوبة </h3>


            <li class="li_style">بطاقة السنوية /البطاقة التموينية / بطاقة السكن / هوية الاحوال المدنية أو البطاقة الموحدة  / صورة المركبة </li>

            <!--<li class="li_style"> هوية الاحوال المدنية / البطاقة الموحدة</li>-->
            <!--<li class="li_style"> بطاقة  السكن</li>-->
            <!--<li class="li_style"> البطاقة التموينية</li>-->
            <!--<li class="li_style">بطاقة السنوية</li>-->
        </ul>

    </div>
    <div class="footer_container"  dir="rtl">
        <p>توقــيع مقـــدم الاستمـــارة</p>
        <p>توقــيع المدقــق </p>
    </div>

    <div class="print_div">
        <button class="btnprn" id="btnprn" onclick="display()">طــباعة</button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.min.js" ></script>

<script>
    var element = document.getElementById('element');
function smartPrint(html, filename = '', orientation = 'portrait') {
    if (filename) {
        filename = filename + ".pdf"
    } else {
        filename = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + ".pdf";
    }
    var opt = {
        margin: 0,
        filename: filename,
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 1 },
        jsPDF: { unit: 'in', format: 'letter', orientation: orientation }
    };
    html2pdf().set(opt).from(html).save();
  btnprn.style.display="none";
}
smartPrint(element);
</script>

<script>
    function display() {
        window.print();
    }
</script>
</body>
</html>

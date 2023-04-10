<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<!-- <link rel="stylesheet" href="{{ url('css/sidebar.css')}}"> -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>لوحة التحكم</title>

</head>
<body>
<nav>
    <div class="logo-name">
        <span class="logo_name ">OPDC</span>
        <div class="logo-image">
            <img src="logo.png" alt="">
        </div>


    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">الصفحة الرئيسية</span>
                </a></li>
            @if (Auth::user()->role_id==1)
            <li><a href="/admin/user">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">المستخدمين</span>
                </a></li>
            <li><a href="/admin/role">
                    <i class="fas fa-user-cog"></i>
                    <span class="link-name">الصلاحيات</span>
                </a></li>
                <li>
                     <li><a href="/admin/messages">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">الرسائل المستلمة</span>
                </a></li>
                <li>
                    <ul>
                        <a href="/log-viewer">
                            <i class="fa-sharp fa-solid fa-chart-line"></i>
                            <span class="link-name">سجل النشاطات</span>
                        </a>

                    </ul>

                </li>
            @endif

            <li><a href="{{route('cars.index')}}">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">جميع البطاقات</span>
                </a></li>
            <li><a href="{{route('active')}}">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">البطاقات المفعلة</span>
                </a>
            </li>
            <li><a href="{{route('scan')}}">
                    <i class="fa-regular fa-address-card"></i>
                    <span class="link-name">تفعيل بطاقة جديدة</span>
                </a>
            </li>
        </ul>

        <ul class="logout-mode">
            <li><a href="#">

                        <!-- Authentication -->
                         <form class="link-name" method="POST" action="{{ route('logout') }}">
                          @csrf
                           <x-jet-dropdown-link
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               this.closest('form').submit();" role="button">
                               <i class="uil uil-signout"></i>
                               <span class="link-name">تسجيل خروج</span>
                            </x-jet-dropdown-link>
                           </form>
                </a></li>

            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">الوضع المظلم </span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<main class="dashboard" >
    <div class="top">
        <!-- <i class="uil uil-bars sidebar-toggle"></i> -->
        <i class="fa-solid fa-arrow-right sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="أبحث هنا...">
        </div>

    <!--{{json_encode($data)}}-->

{{--        <img src="images/profile.jpg" alt="">--}}
    </div>
<!-- @yield('content') -->
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">لوحة التحكم</span>
            </div>

            <div class="boxes">
                <div class="box box1">
                    <!-- <i class="uil uil-thumbs-up"></i> -->
                    <i class="fa-solid fa-address-card"></i>
                    <span class="text">عدد البطائق المفعلة </span>
                    <span class="number">0</span>
                </div>
                <div class="box box2">
                    <!-- <i class="uil uil-comments"></i> -->
                    <i class="fa-solid fa-address-card"></i>
                    <span class="text">عدد البطائق غير المفعلة</span>
                    <span class="number">{{\App\Models\Car::all()->count()}}</span>
                </div>
                <div class="box box3">
                    <!-- <i class="uil uil-share"></i> -->
                    <i class="fa-solid fa-users-rectangle"></i>
                    <span class="text">عدد الزائرين </span>
                    <span class="number">0</span>
                </div>
                <div class="box box4">
                    <!-- <i class="uil uil-share"></i> -->
                    <i class="fa-solid fa-users"></i>
                    <span class="text">عدد المستخدمين </span>
                    <span class="number">{{\App\Models\User::all()->count()}}</span>
                </div>
            </div>
        </div>

        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">النشاطات الاخيرة</span>
            </div>
            <div class="charts">



                <div class="charts-card">
                    <p class="chart-title"> حالات البطــــاقات </p>
                    <div id="area-chart"></div>
                </div>

                <div class="charts-card">
                    <p class="chart-title">البطـــاقات المفعلة</p>
                   <div id="bar-chart" style="  min-height: 365px; width: 535px;
                    height: 250px; margin:0px auto;">
                    <canvas  style="height: 500px; width:500px;" id="myChart"></canvas>
                </div>
                <text id="SvgjsText1644" font-family="Helvetica, Arial, sans-serif" x="171.5" y="161.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text>
            </div>

        </div>
    </div>
</main>
<!-- {{-- <script src="sidebar.js"> --}} -->

<!-- ApexCharts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    // pie charts
//     var barChartOptions = {
//         series: [44, 55, 41, 20],
//         chart: {
//             type: 'donut',
//             height: 350,

//             toolbar: {
//                 show: false
//             },
//             colors: [
//                 "#246dec",
//                 "#cc3c43",
//                 "#367952",
//                 "#f5b74f"
//             ],
//         },
// // stroke: {
// //   width: 0,
// // },
//         plotOptions: {
//             pie: {
//                 donut: {
//                     labels: {
//                         show: true,
//                         total: {
//                             showAlways: true,
//                             show: true,
//                             fontSize: '1.2rem',
//                             color: '#337ab7',

//                         }
//                     }
//                 }
//             }
//         },
// // dataLabels:{
// //   enabled:true,
// // },
//         labels: ["الحمل", "الخصوصي", "الاجرة", "الحكومي"],
//         dataLabels: {
//             // dropShadow: {
//             //   blur: 3,
//             //   opacity: 0.8
//             // }
//         },

// // fill: {
// //   type: 'pattern',
// //     opacity: 1,
// //     pattern: {
// //       enabled: true,
// //       style: ['verticalLines', 'squares', 'horizontalLines', 'circles','slantedLines'],
// //     },
// //   },
//         states: {
//             hover: {
//                 filter: 'none'
//             }
//         },
//         // theme: {
//         //   palette: 'palette2'
//         // },
//         // title: {
//         //   text: "Favourite Movie Type"
//         // },
//         responsive: [{
//             breakpoint: 480,
//             options: {
//                 chart: {
//                     width: 200
//                 },
//                 legend: {
//                     position: 'bottom'
//                 }
//             }
//         }]
//     };

//     var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
//     barChart.render();



    // AREA CHART
    var areaChartOptions = {
        series: [{
            name: 'البطاقات المفعلة ',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'جميع البطاقات',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            height: 350,
            type: 'area',
            toolbar: {
                show: false,
            },
        },
        colors: ["#4f35a1", "#246dec"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: 'smooth'
        },
        labels: ["كانون الثاني", "شباط", "اذار", "نيسان", "مايو", "ايار", "حزيران"],
        markers: {
            size: 0
        },
        yaxis: [
            {
                title: {
                    // text: 'Purchase Orders',
                },
            },
            {
                opposite: true,
                title: {
                    text: ' البطاقات المفعلة',
                },
            },
        ],
        tooltip: {
            shared: true,
            intersect: false,
        }
    };

    var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
    areaChart.render();

    const body = document.querySelector("body"),
        modeToggle = body.querySelector(".mode-toggle");
    sidebar = body.querySelector("nav");
    sidebarToggle = body.querySelector(".sidebar-toggle");

    let getMode = localStorage.getItem("mode");
    if(getMode && getMode ==="dark"){
        body.classList.toggle("dark");
    }

    let getStatus = localStorage.getItem("status");
    if(getStatus && getStatus ==="close"){
        sidebar.classList.toggle("close");
    }

    modeToggle.addEventListener("click", () =>{
        body.classList.toggle("dark");
        if(body.classList.contains("dark")){
            localStorage.setItem("mode", "dark");
        }else{
            localStorage.setItem("mode", "light");
        }
    });

    sidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        if(sidebar.classList.contains("close")){
            localStorage.setItem("status", "close");
        }else{
            localStorage.setItem("status", "open");
        }
    })

</script>


<script>
var data = {!! json_encode($data) !!};
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    plotOptions: {
            pie: {
                doughnut: {
                    labels: {
                        show: true,
                        total: {
                            showAlways: true,
                            show: true,
                            fontSize: '1.2rem',
                            color: '#337ab7',

                        }
                    }
                }
            }
        },
    data: {
        labels: ["خصوصي", "أجرة", "حمل", "حكومي"],
        datasets: [{
            label: 'Values',
            data: Object.values(data),
            backgroundColor: [
                '#FF7EAC',
                '#37D7A5',
                '#CC8AFC',
                'rgba(75, 192, 192, 0.2)'
            ],
            // borderColor: [
            //     'rgba(255, 99, 132, 1)',
            //     'rgba(54, 162, 235, 1)',
            //     'rgba(255, 206, 86, 1)',
            //     'rgba(75, 192, 192, 1)'
            // ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</body>
</html>




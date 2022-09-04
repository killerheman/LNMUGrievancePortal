<!DOCTYPE html>
<html lang="en" class="body-full-height">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- META SECTION -->
    <title>Grievance Portal | LNMU</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('assets/logo/newlnmu.gif') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('assets/css/theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->
    {{-- <style media="screen">
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

        }

        .logo {
            position: relative;
            perspective: 2000000px;
            transform-style: preserve-3d;
            animation-duration: 6s;
            animation-name: rotate;
            animation-iteration-count: infinite;
            transition: ease-in;
        }

        @keyframes rotate {
            0% {
                transform: rotateX(0deg);
            }

            25% {
                transform: rotateX(90deg);
            }

            50% {
                transform: rotateX(180deg);
            }

            75% {
                transform: rotateX(270deg);
            }

            100% {
                transform: rotateX(360deg);
            }

        }

        .logo div {
            position: absolute;
            color: white;
            height: 40px;
            width: 200px;
            margin-top: -100px;

        }

        .logo div:nth-child(1) {
            transform: rotateX(360deg) translateZ(100px);
            background: #ff0066;
            background-image: url(assets/logo/logo.png);
            background-size: cover;
            height: 200px;
            background-repeat: no-repeat;
        }

        .logo div:nth-child(2) {
            transform: rotateX(270deg) translateZ(100px);
            height: 200px;
            background: #0bdd04;
            background-image: url(assets/logo/logo1.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .logo div:nth-child(3) {
            transform: rotateX(180deg) translateZ(100px);
            height: 200px;
            background: #117ee4;
            background-image: url(assets/logo/logo1.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .logo div:nth-child(4) {
            transform: rotateX(90deg) translateZ(100px);
            height: 200px;
            background: #ff7b00;
            background-image: url(assets/logo/logo.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style> --}}
    <style>
        .text-effect {
            background-repeat: no-repeat;
            background-image: radial-gradient(circle farthest-corner at center center, #7C0000 0%, #7C0000 50%, transparent 50.1%);
            background-position: 50% 50%;
            background-size: 0 0;
            font-family: 'Rancho', cursive;
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            -webkit-text-stroke-color: #7C0000;
            -webkit-text-stroke-width: 0.001em;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            animation: animate 8s infinite linear;
        }

        @keyframes animate {
            100% {
                background-size: 180% 400%;
            }
        }

        @media only screen and (max-width: 990px) {
            .text-effect {
                font-size: 110px;
            }
        }

        @media only screen and (max-width: 767px) {
            .text-effect {
                font-size: 90px;
            }
        }

        @media only screen and (max-width: 576px) {
            .text-effect {
                font-size: 70px;
            }
        }

        @media only screen and (max-width: 479px) {
            .text-effect {
                font-size: 50px;
                line-height: 50px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container lightmode">
        <div class="header">
            <div class="container">
                <a href="#">
                    <img src="{{ asset('assets/logo/newlnmu.gif') }}" alt="logo" height="120">
                </a>
                {{-- <marquee id="mScroll" direction="right" style="color: #0c64cb;font-size: 17px;background-color: #d3dbcd3d;">Lalit Narayan Mithila University</marquee> --}}
            </div>
            {{-- <div class="logo container " style="text-align: center;">

                <div></div>
                <div></div>
                <div></div>
                <div></div>

            </div> --}}


        </div>
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">
                {{-- <h2 class="portal-heading">Grievance Redressal Portal</h2> --}}

                <div class="text-effect" style="margin-top: 50px;">
                    <span>LNMU Grievance Redressal Portal</span>
                </div>


                <ul id="hexGrid" style="margin-top: 50px;">
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink" href="{{route('login','admin')}}">
                                <img src="Assets/img/icons/admin.png" alt="admin" />
                                <h1>Admin </h1>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink" href="{{route('login','student')}}">
                                <img src="Assets/img/icons/student.png" alt="student" />
                                <h1>Students </h1>
                            </a>
                        </div>
                    </li>
                    <li class="hex MODU1">
                        <div class="hexIn">
                            <a class="hexLink" href="{{route('login','parent')}}">
                                <img src="Assets/img/icons/parent.png" alt="parent" />
                                <h1>Parents </h1>
                            </a>
                        </div>
                    </li>
                    {{-- <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink" href="Home/Login7a6b.html?userType=GrievanceMember">
                                <img src="Assets/img/icons/grievance-cell-members.png" alt="grievance-cell-members" />
                                <h1>Grievance Cell Members</h1>
                            </a>
                        </div>
                    </li> --}}
                    <li class="hex MODU3">
                        <div class="hexIn">
                            <a class="hexLink" href="{{route('login','faculty')}}">
                                <img src="Assets/img/icons/faculty.png" alt="faculty" />
                                <h1>Faculty Members</h1>
                            </a>
                        </div>
                    </li>
                    <li class="hex MODU2">
                        <div class="hexIn">
                            <a class="hexLink" href="{{route('login','non-teaching staff')}}">
                                <img src="Assets/img/icons/non-teaching-staff.png" alt="non-teaching-staff" />
                                <h1>Non Teaching Staff </h1>
                            </a>
                        </div>
                    </li>
                    {{-- <li class="hex MODU4">
                        <div class="hexIn">
                            <a class="hexLink" href="Home/Login0742.html?userType=Management">
                                <img src="Assets/img/icons/management.png" alt="management" />
                                <h1>Management </h1>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink" href="Home/Help.html">
                                <img src="Assets/img/icons/help.png" alt="help" />
                                <h1>Help </h1>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink" href="Home/ContactUs.html">
                                <img src="Assets/img/icons/contact.png" alt="contact" />
                                <h1>Contact Us</h1>
                            </a>
                        </div>
                    </li> --}}
                </ul>
            </div>

            <div class="clearfix"></div>
            {{-- <div class="login-footer">
                <div class="pull-left">
                    <br>
                    <br>
                    &copy; 2022 GrievancePortal Powered by <a target="_blank" href="http://lnmu.ac.in/">IT Cell LNMU </a>
                </div>
            </div> --}}
        </div>
    </div>
</body>

</html>
<script src="{{ asset('assets/scripts/redirectBackButton.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery-3.1.1.min.js') }}"></script>
<script>
    redirectBackButton(window.location.href);
    $.ajax({
        type: "POST",
        url: "/Admin/ModulesAvailable",
        data: {},
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            $.each(JSON.parse(data), function(index, module) {
                if (module.ParameterID == ("MODU" + (index + 1)) && module.ParameterValue ==
                    false) {
                    $(".MODU" + (index + 1)).hide();
                }

            });
        }
    });
    $.ajax({
        type: "POST",
        url: "/Home/GetMarquee",
        data: {},
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            $('#mScroll').html(data)
        }
    });
</script>

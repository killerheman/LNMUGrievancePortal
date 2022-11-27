<!DOCTYPE html>
<html lang="en" class="body-full-height">

<!-- Mirrored from iitk.edugrievance.com/Home/Login?userType=Staff by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 19:42:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- META SECTION -->
    <title>Grievance Portal | LNMU</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('assets/logo/newlnmu.gif') }}" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('assets/css/theme-login.css') }}" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>


    <div class="csi">
        <header>
            <div class="  container">
                <div class="login-box animated fadeInDown">

                    <div class="col-sm-6">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('assets/logo/newlnmu.gif') }}" alt="logo" height="120">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 grievance">

                        <div class="col-md-2">

                            <img class="complaint-logo" src="{{ asset('assets/img/icons/complain.png') }}"
                                alt="icon">
                        </div>

                        <div class="col-md-10">
                            <h1 class="portal-heading">LNMU Grievance Redressal Portal</h1>

                        </div>

                    </div>
                </div>

            </div>

        </header>

    </div>
    <form action="#" class="login-container fisat-admin-login-container form-horizontal" method="post"
        role="form">

        <input id="slug" name="slug" type="hidden" value="{{ $slug }}" />
        <div class="login-box psg-login animated fadeInDown">

            <div class="login-body login-body1">
                <div class="login-title"><strong>{{ ucfirst($slug) }} </strong>Log In</div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input class="form-control" data-val="true" data-val-remote="Unauthorized access! Access denied"
                            data-val-remote-additionalfields="*.UserName" data-val-remote-type="POST"
                            data-val-remote-url="/Home/IsUserApproved" data-val-required="UserName is required"
                            id="UserName" name="UserName" placeholder="Username (Email or Mobile)" type="text"
                            value="" />
                        <span class="field-validation-valid" data-valmsg-for="UserName" data-valmsg-replace="true"
                            style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input class="form-control" data-val="true" data-val-required="Password is required"
                            id="Password" name="Password" placeholder="Password" type="password" />
                        <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"
                            style="color:red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="ForgotPassword.html" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">
                        <input type="submit" value="Login" class="btn btn-info btn-block" />
                    </div>
                </div>

                <div class="login-subtitle col-md-12">
                    @php
                        if ($slug == 'student') {
                            $url = route('studentRegister');
                        } else {
                            $url = route('home');
                        }
                    @endphp
                    <a href="{{ $url }}" class="btn btn-block" style="border-color:white; color:white;">New
                        {{ $slug }} registration </a>

                </div>
            </div>

            {{-- <div class="login-footer">

                <a target="_blank" href="http://edugrievance.com/">
                    <img src="../Assets/img/footer.png" alt="footer">
                </a>
                <p>&copy; 2018 EduGrievance  Powered by<a target="_blank" href="http://orell.com/">  Orell </a></p>
            </div> --}}

        </div>
    </form>
</body>

</html>


<script src="{{ asset('assets/scripts/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery-1.16.0.validate.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery-3.2.6.validate.unobtrusive.min.js') }}"></script>

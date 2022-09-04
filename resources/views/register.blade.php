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
                            <a href="../index.html">
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
    <div class="registration-container csi2 registration-extended" >
        <div class="registration-box reg-box animated fadeInDown" style="margin-bottom: 30px;">

            <form action="#" method="post">
                <div class="registration-body">
                    <div class="registration-title"><strong>Registration</strong></div>
                    <h4 style="text-align: center;">Student Details</h4>
                    <hr />

                    {{-- <div class="form-group hidden">
                        <h4><label class="control-label col-md-12" for="StudentID">StudentID</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control " id="StudentID" name="StudentID" type="text"
                                    value="" />
                                <span class="field-validation-valid" data-valmsg-for="StudentID"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="Name">Name</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true" data-val-required="Name is required"
                                    id="Name" maxlength="100" name="Name" placholder="Name" type="text"
                                    value="" />
                                <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"
                                    style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="AdmissionNumber"
                                id="lblAdmisssionNumber">Admission No: / Roll No: / Register No:</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true"
                                    data-val-required="Admission number / Roll number is required"
                                    id="AdmissionNumber" maxlength="50" name="AdmissionNumber" type="text"
                                    value="" />
                                <span class="field-validation-valid" data-valmsg-for="AdmissionNumber"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="email">Email</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true" data-val-required="Email is required"
                                    id="Name" maxlength="100" name="email" placholder="email" type="email"
                                    value="" />
                                <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"
                                    style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="Password">Mobile No.</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true" data-val-required="Password is required"
                                    id="number"  name="number" type="number" />
                                <span class="field-validation-valid" data-valmsg-for="Password"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="dob">D.O.B.</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true" data-val-required="Dob is required"
                                    id="dob"  name="dob" type="date" />
                                <span class="field-validation-valid" data-valmsg-for="Password"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="dob">Aadhar No</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true" data-val-required="Aadhar is required"
                                    id="aadhar"  name="aadhar" type="number" />
                                <span class="field-validation-valid" data-valmsg-for="Password"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align: left;">Parent's Details</h4>
                    <hr />

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="pname"
                                id="pname">Parents Name / Guardian Name:</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true"
                                    id="AdmissionNupnamember" name="pname" type="text"
                                    value="" />
                                <span class="field-validation-valid" data-valmsg-for="pname"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <h4><label class="control-label col-md-12" for="pnmumber">Mobile No.</label></h4>
                        <div class="col-md-12">
                            <div>
                                <input class="form-control" data-val="true" data-val-required="Number is required"
                                    id="pnumber"  name="pnumber" type="pnumber" />
                                <span class="field-validation-valid" data-valmsg-for="number"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class=" col-md-12">
                            <br />
                            <input type="submit" value="Register" class="btn btn-danger btn-block"
                                style="background-color: #7c0000;color: white;font-weight: 700;" />
                        </div>
                    </div>

                </div>
            </form>
            <br>

        </div>

    </div>


</body>


</html>


<script src="{{ asset('assets/scripts/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery-1.16.0.validate.min.js') }}"></script>
<script src="{{ asset('assets/scripts/jquery-3.2.6.validate.unobtrusive.min.js') }}"></script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Public Sector Digital Skills Baseline Assessment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Public Sector Digital Skills Baseline Assessment" name="description" />
    <meta content="ICTA" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="icon" href="{{ asset('adminbackend/assets/images/logo-gaa.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('adminbackend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminbackend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('adminbackend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('adminbackend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('adminbackend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminbackend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('adminbackend/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/header-colors.css') }}" />
    <style>
        /* Thick red border */
        hr.new4 {
            border: 1px solid #FF9600;
        }
        body {

            background-size: cover; /* Adjust as needed */

        }


         * { box-sizing: border-box; }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from { opacity: .4 }
            to { opacity: 1 }
        }



    </style>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript and Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

</head>

<!-- Bootstrap CSS -->


<!-- Bootstrap JavaScript and Popper.js -->



{{--<body style="background-image: url("{{\Illuminate\Support\Facades\URL::asset('backend/assets/images/background.png') }}")">--}}


{{--<body class="authentication-bg authentication-bg-pattern">--}}
<body style="background-image: url('{{ asset('adminbackend/assets/images/background.png') }}');background-size: cover;">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            {{--            class="col-md-10 col-lg-12 col-xl-8"--}}
            <div>
                <div class="card bg-pattern">



                    <div class="card-body p-4">

                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="https://www.ict.go.ke" target="_blank"> <img src="{{asset('adminbackend/assets/images/logo-gaa.png') }}" width="100%" alt=""></a>
                                </div>
                                <div class="col-md-7">
                                    <br>
{{--                                    <img src="{{asset('adminbackend/assets/images/logo-gaa.png') }}" width="50%" alt=""></a>--}}
                                  <h2 style="color:#005B9A; text-align: center">Public Sector Digital Skills Baseline Assessment</h2>
                                </div>

                                <div class="col-md-2">

                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                @php
                                                    $userId = auth()->id();
                                                    $role = DB::table('users')->where('id', $userId)->value('role');
                                                @endphp

                                                @if($role == 'admin')
                                                    <a href="{{ route('backend.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Admin Dashboard</a>
                                                @elseif($role == 'vendor')
                                                    <a href="{{ route('frontend.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> User Dashboard</a>


{{--                                            @elseif($role == 'user')--}}
{{--                                                <a href="{{ route('frontend.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Default Dashboard</a>--}}

                                            @endauth
                                        </div>
                                    @else
{{--                                        <a href="{{ route('login') }}" class="btn btn-success d-flex align-items-center justify-content-center px-4 py-2" style="background-color: #005B9A; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">--}}
{{--                                            <img class="svgInject me-2" alt="Nest" src="{{ asset('adminbackend/assets/images/icons/icon-user.svg') }}" style="width: 20px; height: 20px;" />--}}
{{--                                            <span style="font-weight: bold; font-size: 16px;">Log in</span>--}}
{{--                                        </a>--}}
                                        <a href="{{ route('business.form.step',1) }}" class="btn btn-success d-flex align-items-center justify-content-center px-4 py-2" style="background-color: #005B9A; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                                            <img class="svgInject me-2" alt="Nest" src="{{ asset('adminbackend/assets/images/icons/icon-user.svg') }}" style="width: 20px; height: 20px;" />
                                            <span style="font-weight: bold; font-size: 16px;">Start Assessment</span>
                                        </a>
                                    @endif

                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="new4">
                        <br>

                        <div class="row">


                            <div class="col-12" >
                                <div class="row row-cols-12 row-cols-md-12 row-cols-lg-12 row-cols-xl-12">
                                    <div class="col">
                                        <div class="card">

                                            <div class="card-body">

                                                <p class="card-text">


                                                <iframe src="https://sasdef.go.ke/wp-content/uploads/2024/09/Step-by-step-guide-CoC-Needs-Assessment.pdf" width="100%" height="600px"></iframe>
{{--                                                    <iframe src="https://baseline.moict.go.ke/infograph/infostep.pdf" width="100%" height="600px"></iframe>--}}
{{--                                                    <img src="{{ asset('adminbackend/assets/images/base1.png')}}" class="card-img-top" alt="..." style="width: 100%; height: 600px;">--}}
{{--                                                    <img src="https://sasdef.go.ke/wp-content/uploads/2024/09/base1.png" class="card-img-top" alt="..." style="width: 100%; height: 600px;">--}}
                                                <h4> INTRODUCTION</h4>
                                                The Ministry of Information Communication and the Digital Economy, in partnership with the United Nations Development Programme (UNDP), is proud to introduce the Public Sector Baseline Digital Skills Survey. The survey aims to
                                                gather valuable insights from public servants across Kenya to identify existing digital skills gaps and tailor subsequent training programs and interventions accordingly for every public servant, no matter current level. Our efforts align closely
                                                    with the Kenya Digital Masterplan and the Memorandum of Understanding signed on 8 August 2023.
                                                <br>
                                                <br>
                                                    <h5>Why Your Participation Matters</h5>
                                                    Your participation in this survey is crucial. By providing honest feedback, you help shape the development of digital
                                                    skills for yourself and your colleagues, contributing to both personal and organizational growth. This effort will strengthen collective ability to deliver effective public services and build a more digitally competent workforce in Government.
                                                <br>
                                                <br>
                                                  <h5>  Confidentiality</h5>
                                                    By completing this survey, you consent to sharing your name and email address. We value your privacy and assure you
                                                    that the information received will be treated as confidential, and used solely for the purpose of ensuring that the training programs meet individual and organizational needs.
                                                <br>
                                                <br>
                                                 <h5>   Survey Duration</h5>
                                                    The survey will take approximately  <strong>10-15 minutes</strong> to complete.
                                                <br>
                                                    Your input will pave the way for a more digitally inclusive and empowered future in Kenya. Thank you for your commitment to advancing digital literacy and excellence in public service.

                                                <br>
                                                <br>
                                                   <h5>OBJECTIVES</h5>
                                                    Identify current digital skills levels
                                                <br>
                                                    Understand the need for the digital skills training
                                                <br>
                                                    Identify appropriate interventions and Priority areas for digital skills training
                                                <br>
                                                <br>
                                                    <h5>SECTIONS</h5>
                                                   <li>Demographics</li>
                                                    Key Thematic Areas:
                                                <ol>
                                                    <li>Skill level</li>
                                                    <li>
                                                        Needs
                                                    </li>
                                                    <li>Interventions</li>
                                                </ol>



                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                                <div>
                                    <h2 style="color:darkgreen">Start Survey</h2>
                                </div>
                                <div class="row">

                                    <div class="col-md-10">
                                        <div class="card radius-10 bg-light-success">
                                            <div class="card-body">
                                                <!-- Move the icon on top -->
                                                <div class="widgets-icons bg-white text-green-600 mb-3 text-center" style="border-radius: 50%; width: 50px; height: 50px; line-height: 50px;">
                                                    <i class="bx bxs-archive-out"></i>
                                                </div>

                                                <h3 class="mb-0 text-red">Start Survey</h3>
                                                <hr style="color: red">
                                                <h5 class="my-1 text-dark">Start My Survey</h5>


                                                <!-- Move the login button to the left -->
                                                <div class="mt-4">
                                                    <a href="{{ route('business.form.step',1) }}" class="btn btn-success d-flex align-items-center justify-content-center px-4 py-2" style="background-color: #ffffff; border: 2px solid darkgreen; color: darkgreen; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, color 0.3s;">
                                                        <span style="font-weight: bold; font-size: 14px;">Start Now</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 20px; height: 20px; margin-left: 8px;">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                </div>

                                <br>




                        <br>
                        <br>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->



            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <!-- end page -->


    <footer class="footer footer-alt">
        <script>document.write(new Date().getFullYear())</script> &copy;  <a href="https://www.ict.go.ke" class="text-green-600" target="_blank">The  Ministry of Information, Communications and The Digital Economy (MICDE)</a>
    </footer>

    <!-- Vendor js -->
    <script src="{{asset('adminbackend/assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('adminbackend/assets/js/app.min.js')}}"></script>


</body>
</html>



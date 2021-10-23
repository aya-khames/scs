<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Safety Control Service</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body style="background-image: url(/assets/img/bg-masthead.jpg); background-position: center; background-size: cover; background-repeat: no-repeat">

<header>
    <!-- Navbar -->
    <nav id="main-navbar" style="background-color: rgba(240,248,248,0.39)" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Brand -->
            <div style="display:inline-block">
                <img src="./assets/img/logo.ico" height="70" alt="" loading="lazy" style="vertical-align: unset"/>
            </div>
            <div style="display: inline-block; line-height: 0.8; margin-top: 0">
                <span style="font-weight: bold; color: rgb(12,60,94);font-family: 'Times New Roman'; font-size: 55px; letter-spacing: 4px">SCS</span>
                <br>
                <span style="font-weight: bold; font-style: italic; color: rgb(12,60,94);font-family: 'Lucida Calligraphy'; font-size: 15px; letter-spacing: 1px">Safety Control Service</span>
            </div>
            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <li class="nav-item">
                    <a href="/register" class="list-group-item list-group-item-action py-2 ripple"
                       style="background-color: #032136;color: #fff;border-radius: 15px; letter-spacing: 1px;
                            border: 2px rgba(255, 255, 255, 0.15); text-align: center;
                            box-shadow: 0 0 5px 5px gainsboro"><span >Create new employee</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="list-group-item list-group-item-action py-2 ripple"
                       style="background-color: #032136;color: #fff;border-radius: 15px; letter-spacing: 1px;
                            border: 2px rgba(255, 255, 255, 0.15); text-align: center; margin-left: 10px; margin-right: 10px;
                            box-shadow: 0 0 5px 5px gainsboro; width: 110px" ><span>Home </span><i style="color: whitesmoke" class="fas fa-home"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action py-2 ripple"
                       style="background-color: rgba(126,18,28,0.94);color: #fff;border-radius: 15px; letter-spacing: 1px;
                            border: 2px rgba(255, 255, 255, 0.15); text-align: center; width: 120px;
                            box-shadow: 0 0 15px gainsboro"><span>Log Out </span><i style="color: whitesmoke" class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="background-color: rgba(240,248,248,0.39); margin-top: 92.93px">
    <div style="margin-top: 5px">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="/page" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <span>Client</span>
            </a>
            <a href="/quoten" class="list-group-item list-group-item-action py-2 ripple active">
                <span>Quotation</span>
            </a>
            <a href="/workn" class="list-group-item list-group-item-action py-2 ripple">
                <span>Work Order</span>
            </a>
            <a href="/invn" class="list-group-item list-group-item-action py-2 ripple">
                <span>Invoice</span>
            </a>
            <a href="/dnoten" class="list-group-item list-group-item-action py-2 ripple">
                <span>Delivery Note</span>
            </a>
            <a href="/hireofn" class="list-group-item list-group-item-action py-2 ripple">
                <span>Hire ON/OFF</span>
            </a>
            <a href="/unsafen" class="list-group-item list-group-item-action py-2 ripple">
                <span>Unsafe</span>
            </a>
            <a class="list-group-item list-group-item-action py-2 ripple" style="padding: unset">
                <select onchange="location = this.value;" class="miniDrop" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="" disabled selected>NDT</option>
                    <option value="dpin" class="dropdown-item">NDT D.P.I</option>
                    <option value="mpin" class="dropdown-item">NDT M.P.I</option>
                </select>
            </a>
            <a class="list-group-item list-group-item-action py-2 ripple" style="padding: unset">
                <select onchange="location = this.value;" class="miniDrop" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="" disabled selected>Test Visual MPI</option>
                    <option value="tvn" class="dropdown-item">Test/Visual</option>
                    <option value="tmvmn" class="dropdown-item">Test.MPI/Visual.MPI</option>
                </select>
            </a>
            <a href="/cranen" class="list-group-item list-group-item-action py-2 ripple"
            ><span>Crane</span></a
            >
            <a href="compn" class="list-group-item list-group-item-action py-2 ripple"
            ><span>Compressor</span></a
            >
            <a href="/walln" class="list-group-item list-group-item-action py-2 ripple"
            ><span>Wall Thickness</span></a
            >
            <a href="/cdn" class="list-group-item list-group-item-action py-2 ripple"
            ><span>CDN</span></a
            >
        </div>
    </div>
</nav>
<!-- Sidebar -->

<!-- Forms -->
<br> <br>
@yield('content_1')
<!-- Forms -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@yield('scripts')
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashboard/style.css">
</head>
<body>
@include('layouts.dashboard.navbar')
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(assets/dashboard/bg_1.jpg);">
            <div class="user-logo">
                <div class="img" style="background-image: url({{asset('/storage/'. $ac->image_path)}});"></div>
                <h3>{{$ac->account_holder_name}}</h3>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="li_btn">
                <a href="#" class="btn_Dashboard"><span class=" fa fa-home mr-3"></span>Dashboard</a>
            </li>
            <li class="li_btn">
                <a href="#" class="btn_Transactions"><span class="fa fa-download mr-3 notif"><small
                            class="d-flex align-items-center justify-content-center">5</small></span>Transactions</a>
            </li>
            <li class="li_btn">
                <a href="#" class="btn_Deposit"><span class="fa fa-gift mr-3"></span>Deposit</a>
            </li>
            <li class="li_btn">
                <a href="#" class="btn_Withdraw"><span class="fa fa-trophy mr-3"></span>Withdraw</a>
            </li>
            <li class="li_btn">
                <a href="#" class="btn_Transfer "><span class="fa fa-cog mr-3"></span>Transfer</a>
            </li>
            <li class="li_btn">
                <a href="#" class="btn_Settings "><span class="fa fa-cog mr-3"></span>Settings</a>
            </li>
            <li class="li_btn">
                <a href="#" class="btn_Support "><span class="fa fa-support mr-3"></span>Support</a>
            </li>
            <li class="li_btn">
                <a href="{{route('logout')}}" class="btn_Sign_Out"><span class="fa fa-sign-out mr-3"></span>Sign Out</a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5" style="display: block">
        @include('layouts.dashboard.dashboard_content')
        @include('layouts.dashboard.transaction_content')
        @include('layouts.dashboard.withdraw_content')
    </div>
</div>
@include('layouts.footer')
    @include('links.script')
    <script src="js/dashboard/jquery.min.js"></script>
    <script src="js/dashboard/popper.js"></script>
    <script src="js/dashboard/bootstrap.min.js"></script>
    <script src="js/dashboard/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="{{ asset('img/admin-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('img/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{ asset('img/admin-text.png')}} " alt="home" class="dark-logo"/><!--This is light logo text--><img src="{{ asset('img/admin-text-dark.png')}}" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="/listOfServiceType">服务类型</a></li>
                    <li><a href="/list">所有订单</a></li>
                </ul>
            </div>
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Panopath</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="devider"></li>
                        <ul class="nav nav-second-level">
                            <li><a class="active" href="/listOfServiceType"><span class="hide-menu">服务类型</span></a></li>
                            <li ><a  href="/list"><span class="hide-menu">所有订单</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">修改原有服务</h3>
                                <div class="modal-body">
                                    <form method="post" action="/services/{{$service->id}}" class="form-horizontal form-material">
                                        <div class="form-group">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="PUT" >
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="name" value="{{$service->name}}" class="form-control" placeholder="服务名称"> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="money" value="{{$service->money}}" class="form-control" placeholder="服务价格"> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="bonus_rate" value="{{$service->bonus_rate}}" class="form-control" placeholder="利润率"> </div>
                                            <input type="submit" name="commit" value="修改" class="btn btn-info">
                                            <a class="btn btn-default" href="/services">返回</a>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    <script src=" {{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=" {{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/custom.min.js')}} "></script>

</body>
</html>

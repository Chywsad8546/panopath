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
    <title>Panopath</title>
    <!-- Bootstrap Core CSS -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css'" rel="stylesheet">
    <!-- color CSS -->
    <link href="/css/colors/blue-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
        <!-- Topbar header - style you can find in pages.scss -->
        <?php
        $a = view('Header');
        $html = response($a)->getContent();
        echo $html
        ?>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Panopath</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="devider"></li>
                    <ul class="nav nav-second-level">
                        <li><a class="active" href="/services"><span class="hide-menu">服务类型</span></a></li>
                        <li ><a  href="/list"><span class="hide-menu">所有订单</span></a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
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

    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.min.js "></script>
        <!-- Menu Plugin JavaScript -->
        <script src="/sidebar-nav/dist/sidebar-nav.min.js"></script>
</body>
</html>

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
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
        <!-- Topbar header - style you can find in pages.scss -->
        <?php
        $a = view('Header');
        $html = response($a)->getContent();
        echo $html
        ?>
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">添加新的服务</h3>
                                <div class="modal-body">
                                    <form method="post" action="/services" class="form-horizontal form-material">
                                        <div class="form-group">
                                            {{ csrf_field() }}
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="name" class="form-control" placeholder="服务名称"> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="money" class="form-control" placeholder="服务价格"> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="bonus_rate" class="form-control" placeholder="利润率"> </div>
                                            <input type="submit" name="submit" value="添加" class="btn btn-info" data-disable-with="xiu gai">
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

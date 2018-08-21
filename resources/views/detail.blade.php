<!DOCTYPE html>

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
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <?php
        $a = view('Header');
        $html = response($a)->getContent();
        echo $html
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?php foreach($sales as $item){ ?>                                                 
                            <h3 class="box-title">"{{$item->userName}}"的所有订单</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>订单编号</th>
                                                <th>订单类型</th>
                                                <th>订单金额</th>
                                                <th>订单利润</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->type_id}}</td>
                                                <td>{{$item->money}}</td>
                                                <td>{{$item->bonus_money}}</td>
                                                <td>
                                                </td>
                                            </tr>  
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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
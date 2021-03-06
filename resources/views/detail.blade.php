<!DOCTYPE html>
<?php session_start();
echo("<script>console.log(".json_encode($sales).");</script>");
?>
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
    <link href="/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/css/colors/blue-dark.css" id="theme" rel="stylesheet">
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
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Panopath</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="devider"></li>
                    <ul class="nav nav-second-level">
                        <li><a  href="/services"><span class="hide-menu">服务类型</span></a></li>
                        <li ><a  href="/list"><span class="hide-menu">所有订单</span></a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h2 class="box-title m-t-40">销售:{{$userName}}</h2>
                        <h4 class="m-t-40">提成总额: <big class="text-success">${{$bonusMoneyCount}}</big></h4>
                    </div>
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">{{$userName}}的所有订单</h3>
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
                                        <?php foreach($sales as $item){ ?>
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->bonus_money}}</td>
                                            <td>10</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                          <?php } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="text-right">
                                                    <ul class="pagination"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
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
    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.min.js"></script>

    <!-- Menu Plugin JavaScript -->
    <script src="/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <!--FooTable init-->
    <!-- Footable -->
    <script src="/footable/js/footable.all.min.js"></script>
    <!--//分页-->
    <script src="/js/footable-init.js"></script>
</body>
</html>
<!DOCTYPE html>
<?php session_start();
  echo("<script>console.log(".json_encode($typeList).");</script>");
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
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
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
                        <li><a class="active" href="/services"><span class="hide-menu">服务类型</span></a></li>
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
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">所有服务类型</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>serviceName</th>
                                                <th>bonusRate</th>
                                                <th>price</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                    <?php
                                                foreach($typeList as $item) { ?>
                                                 
                                             <tr>
                                                <td>{{$item->id}}</td>
                                                <td>
                                                    <a href='javascript:void(0);'>{{$item->name}}</a>
                                                </td>
                                                <td>{{$item->bonus_rate}}</td>
                                                <td>{{$item->money}}</td>
                                                <td>
                                                    <a class="btn btn-info" href="/services/{{$item->id}}/edit">更改</a>
                                                </td>
                                                <td>
                                                <form action='/services/{{$item->id}}' method='POST'>
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-default waves-effect">删除</button>
                                                </form>
                                                </td>
                                            </tr>  <?php
                                        }
                                          ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <a class="btn btn-info" href="/services/create">添加新的服务</a>
                                                </td>
                                            </tr>
                                        </tfoot>
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
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="sidebar-nav/dist/sidebar-nav.min.js"></script>
</body>
</html>
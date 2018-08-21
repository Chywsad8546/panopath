<!DOCTYPE html>
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
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        $a = view('Header');
        $html = response($a)->getContent();
        echo $html
        ?>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Product Detail</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Product Detail</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <div class="">
                                <h2 class="m-b-0 m-t-0">Rounded Chair</h2> <small class="text-muted db">globe type chair for rest</small>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> <img src="img/chair.jpg" class="img-responsive" /> </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        <h4 class="box-title m-t-40">Product description</h4>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
                                        <h2 class="m-t-40">$153 <small class="text-success">(36% off)</small></h2>
                                        <button class="btn btn-inverse btn-rounded m-r-5" data-toggle="tooltip" title="Add to cart"><i class="ti-shopping-cart"></i> </button>
                                        <button class="btn btn-danger btn-rounded"> Percentage </button>
                                        <h3 class="box-title m-t-40">Key Highlights</h3>
                                        <ul class="list-icons">
                                            <li><i class="fa fa-check text-success"></i> Sturdy structure</li>
                                            <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                                            <li><i class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title m-t-40">General Info</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="390">Brand</td>
                                                        <td> Stellar </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delivery Condition</td>
                                                        <td> Knock Down </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seat Lock Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Type</td>
                                                        <td> Office Chair </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Style</td>
                                                        <td> Contemporary &amp; Modern </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wheels Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Upholstery Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Upholstery Type</td>
                                                        <td> Cushion </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Head Support</td>
                                                        <td> No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suitable For</td>
                                                        <td> Study &amp; Home Office </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adjustable Height</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Model Number</td>
                                                        <td> F01020701-00HT744A06 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Armrest Included</td>
                                                        <td> Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Care Instructions</td>
                                                        <td> Handle With Care, Keep In Dry Place, Do Not Apply Any Chemical For Cleaning. </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Finish Type</td>
                                                        <td> Matte </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme working">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
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
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

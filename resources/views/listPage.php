<!DOCTYPE html>
<?php session_start();
      echo("<script>console.log(".json_encode($qrcode).");</script>");
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
    <!-- Footable CSS -->
    <link href="/footable/css/footable.core.css" rel="stylesheet">
    <link href="/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Menu CSS -->
    <link href="/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>sidebar
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <li><a  href="/services"><span class="hide-menu">服务类型</span></a></li>
                        <li ><a class="active" href="/list"><span class="hide-menu">所有订单</span></a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">订单列表</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>订单编号</th>
                                                <th>销售用户名</th>
                                                <th>价格</th>
                                                <th>购买类型</th>
                                                <th>创建时间</th>
                                                <th>更新订单</th>
                                            </tr>
                                        </thead>
                                        <form id="pro_list_form" class="form-inline form-search" action="/list" pageSize="15">
                                            <div class="form-group col-sm-2">
                                                <label class="control-label">用户名</label>
                                                <input id="demo-input-search2" name="userName" <?php if (isset($requestAll['userName'])){echo "value='".$requestAll['userName']."'";} ?>  type="text" placeholder="Search" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group  col-sm-2">
                                                <label class="control-label">类型</label>
                                                <select class="selectpicker m-b-20 m-r-10" name="service_type" data-style="btn-success btn-outline">
                                                    <option data-tokens="ketchup mustard" <?php if ($serviceType=="0"){echo"selected = 'selected'";} ?>value="0">全部</option>
                                                    <option data-tokens="mustard" <?php if ($serviceType=="1"){echo"selected = 'selected'";} ?>value="1">已买</option>
                                                    <option data-tokens="mustard" <?php if ($serviceType=="2"){echo"selected = 'selected'";} ?> value="2">未买</option>
                                                    <option data-tokens="mustard" <?php if ($serviceType=="3"){echo"selected = 'selected'";} ?>value="3">未确认</option>
                                                </select>
                                            </div>
                                            <div class="form-actions pull-right">
                                                <button class="fcbtn btn btn-success btn-outline btn-1b">查询</button>
                                            </div>
                                        </form>
                                      <!--  <div class="col-lg-6 col-sm-12">
                                            <div class="row">
                                                <form>
                                                <div class="col-sm-4 text-right m-b-20">
                                                </div>
                                                </form>
                                            </div>
                                        </div>-->
                                        <tbody>
                                        <?php
                                        //for ($i=0; $i<sizeof($qrcode); $i++) {
                                        foreach($qrcode as $item) {
                                            echo " <tr><td>$item->sourceId</td><td>";
                                            if ($item->username!="无对应销售"){
                                                $url = "127.0.0.1:9371/private-api/get-avatar-url-by-mp-open-id?openid=$item->openid";
                                                $ch = curl_init();
                                                curl_setopt($ch, CURLOPT_URL, $url);
                                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                                $response = json_decode(curl_exec($ch));
                                                curl_close($ch);

                                               if (empty(@$response->errNo)) {
                                                    return $response->img_url=1;
                                                }
                                                echo("<script>console.log(".json_encode($response).");</script>");
                                                echo "<a href='/details/$item->username'><img src=\"$response->img_url\"  alt=\"user\" class=\"img-circle\" />$item->username</a>";
                                            }
                                            else{
                                                echo "<a href='javascript:void(0);'>$item->username</a>";
                                            }
                                            echo "</td><td> $item->money</td><td>"; 
                                            if (!isset($item->name)&& $item->username!="无对应销售"){
                                                echo"未确认";
                                            }
                                            else{
                                            echo $item->name;
                                            } 
                                            echo"</td><td> $item->createdAt</td><td>";
                                            if(!isset($item->type_id) && $item->username!="无对应销售"){
                                                 echo" <button type=\"button\" class=\"btn btn-info update\" data-toggle=\"modal\" data-username='$item->username' data-id=\"$item->sourceId\" data-target=\"#add-contact\">更改</button>";
                                             }
                                            echo "  <button type='button' class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\"  data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button></td></tr>";
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                                            <div class="modal-body">
                                                                <form class="form-horizontal" action="/list" method="post">
                                                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                                    <input type="hidden" id="SSTypeName" name="username" value="">
                                                                    <input type="hidden" id="souceServiceTypeId" name="sourceId" value="">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <h5 class="m-t-30 m-b-10">选择服务类型</h5>
                                                                            <select class="selectpicker" name="typeId" data-style="form-control">
                                                                                <?php
                                                                                  foreach ($servicesTypeList as $item){
                                                                                       echo "<option value='$item->id'>$item->name</option>";
                                                                                  }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-info">Save</button>
                                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <button onclick="exportEx()" class="fcbtn btn btn-success btn-outline ">导出Excel</button>
                                                    <div class="text-right">
                                                     <!--   <ul class="pagination">
                                                        </ul>-->
                                                        <ul class="pagination">
                                                            <li class="footable-page-arrow"><a data-page="first" href="/list?pageIndex=1">«</a></li>
                                                            <?php
                                                            if($pageindex >1){
                                                                echo "<li class=\"footable-page-arrow\"><a data-page=\"prev\" href='/list?pageIndex=".($pageindex-1)."'>‹</a></li>";
                                                            }
                                                                for ($i=4;$i>0;$i--){
                                                                        if (($pageindex-$i)<1){
                                                                            continue;
                                                                        }
                                                                    echo "<li class=\"footable-page \"><a data-page=\"0\" href=\"/list?pageIndex=".($pageindex-$i)."\">".($pageindex-$i)."</a></li>";
                                                                }
                                                                  echo "<li class=\"footable-page active\"><a data-page=\"0\" href=\"/list?pageIndex=".($pageindex)."\">".($pageindex)."</a></li>";
                                                            for ($i=1;$i<=4;$i++){
                                                                if (($pageindex+$i)>$pageend){
                                                                     break;
                                                                }
                                                                echo "<li class=\"footable-page \"><a data-page=\"0\" href=\"/list?pageIndex=".($pageindex+$i)."\">".($pageindex+$i)."</a></li>";
                                                            }
                                                               if($pageindex <$pageend){
                                                                echo "<li class=\"footable-page-arrow\"><a data-page=\"next\" href='/list?pageIndex=".($pageindex+1)."'>›</a></li>";
                                                               }
                                                            ?>
                                                            <li class="footable-page-arrow"><a data-page="last" href="/list?pageIndex=<?php echo $pageend?>">»</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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

    <!-- Menu Plugin JavaScript -->
    <script src="/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <!--slimscroll JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>

    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.min.js"></script>

    <script src="/custom-select/custom-select.min.js" type="text/javascript"></script>


    <!-- Footable -->
    <!--   <script src="footable/js/footable.all.min.js"></script>-->
    <script src="/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <script src="/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/multiselect/js/jquery.multi-select.js"></script>

    <!--FooTable init-->

    <!--//分页-->
   <!-- <script src="js/footable-init.js"></script>-->

    <script src="/switchery/dist/switchery.min.js"></script>

    <!--Style Switcher -->
    <script src="/js/jQuery.style.switcher.js"></script>

</body>

</html>


<script>

    function exportEx(){
        console.log("a")
        window.location.href='/exportExcel';
    }

    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
    });
</script>
<script>
    $('.update').each(function () {
        $(this).click(function () {
            var _id = $(this).data('id');
            var _username= $(this).data('username');
            $("#SSTypeName").val(_username);
            $("#souceServiceTypeId").val(_id);
            console.log($("#SSTypeName"));
        })
    });
</script>

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
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="/services">服务类型</a></li>
            <li><a href="/list">所有订单</a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">用户:<?php echo session('username');?> </b><span class="caret"></span> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="/logOut"><i class="fa fa-power-off"></i>退出登录</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
</nav>

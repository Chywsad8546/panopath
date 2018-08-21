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
            <li><a href="/listOfServiceType">服务类型</a></li>
            <li><a href="/list">所有订单</a></li>
        </ul>
    </div>
</nav>
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
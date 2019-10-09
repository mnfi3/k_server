<div class="navbar navbar-fixed-top" id="main-navbar">
    <div class="header-right">
        <a href="/" class="logo-con">
            <h1 class="text-center" style="color: white;font-weight: 600" id="panel-title"> پنل رئیس </h1>
        </a>
    </div>
    <div class="header-left">
        <div class="top-bar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="btn" id="toggle-sidebar" >
                        <span></span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="btn" id="toggle-fullscreen">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                </li>
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                        <img src="{{ asset('images/user/48.png') }}" alt="عکس پرفایل" class="img-circle img-responsive">
                        <span class="text-black" style="color: black">محسن فرجامی</span>
                        <i class="icon-arrow-down text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-power text-danger"></i>
                                خروج
                            </a>
                            <form id="logout-form" action="" method="" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@include('sys-admin.include.header')

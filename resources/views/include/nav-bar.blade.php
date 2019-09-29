

<div class="navbar navbar-fixed-top" id="main-navbar">
    <div class="header-right">
        <a href="/" class="logo-con">
            <h1 class="text-center" style="color: white;font-weight: 600" id="panel-title"> پنل مدیریت </h1>
        </a>
    </div><!-- /.header-right -->
    <div class="header-left">
        <div class="top-bar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="btn" id="toggle-sidebar" >
                        <span></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn open" id="toggle-sidebar-top">
                        <i class="icon-user-following"></i>
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
                        <span class="text-black" style="color: black">رستوران کاج</span>
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
            </ul><!-- /.navbar-left -->
        </div><!-- /.top-bar -->
    </div><!-- /.header-left -->
</div>
<script>
  var isopen = true;
  $("#toggle-sidebar").click(function(){
    if (isopen){
      $('#panel-title').css("font-size","1.2rem");
      $('#panel-title').innerHTML = "";
    }else {
      $('#panel-title').css("font-size","1.9rem");
    }
    isopen = !isopen;
  });
</script>

@include('include.header')

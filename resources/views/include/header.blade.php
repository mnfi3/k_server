
<div id="wrapper" class="" style="">
    <!-- BEGIN SIDEBAR -->
    <div id="sidebar" class="bg-warning">
        <div class="side-menu-container ">
            <ul class="metismenu" id="side-menu" style="min-height: 500px">
                <li class="" style="background-color: rgba(255,187,3,0.84)">
                    <a href="{{url('/restaurant/panel')}}" class="example-1">
                    <i class="icon-home text-white " style=""></i>
                    <span style="font-size: 2rem; color: white;" class="">سفارشات الان</span>
                        @php
                        use Illuminate\Support\Facades\Auth;
                        $user = Auth::user();
                        $count = $user->restaurantOrders()->where('is_delivered', '=', 0)->count();
                        @endphp
                        @if($count > 0)
                        <span class="new-order2"> جدید </span>
                        @endif
                    </a>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-basket"></i>
                        <span>مدیریت محصولات</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('/restaurant/panel/categories')}}" class="">
                                <i class="icon-basket   "></i>
                                <span> دسته بندی ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/restaurant/panel/manage-foods')}}" class="">
                                <i class="icon-briefcase"></i>
                                <span> غذاها</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/restaurant/panel/manage-side')}}" class="">
                                <i class="icon-clock"></i>
                                <span>  مخلفات و همراه غذاها</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-magnifier"></i>
                        <span>گزارش گیری</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('/restaurant/panel/today-report')}}" class="">
                                <i class="icon-briefcase"></i>
                                <span>فروش امروز</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/restaurant/panel/all-report')}}" class="">
                                <i class="icon-clock"></i>
                                <span> سایر</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{url("/restaurant/panel/discount-code")}}" class="" data-toggle="">
                        <i class="icon-diamond"></i>
                        <span>مدیریت کد تخفیف</span>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>
                        <span>پروفایل</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('/restaurant/panel/profile/image')}}" class="">
                                <i class="icon-picture"></i>
                                <span> تصویر </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/restaurant/panel/profile/description')}}" class="">
                                <i class="icon-picture"></i>
                                <span> متن خوش آمد گویی </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/restaurant/panel/profile/address')}}" class="">
                                <i class="icon-book-open"></i>
                                <span> آدرس و تلفن </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/restaurant/panel/profile/password')}}" class="">
                                <i class="icon-lock"></i>
                                <span>تغییر رمز</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul><!-- /#side-menu -->
        </div><!-- /.side-menu-container -->
    </div><!-- /#sidebar -->
</div>
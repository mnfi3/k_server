
<div id="wrapper" class="" style="">
    <!-- BEGIN SIDEBAR -->
    <div id="sidebar" class="bg-warning">
        <div class="side-menu-container ">
            <ul class="metismenu" id="side-menu" style="min-height: 500px">
                <li class="" style="background-color: rgba(255,187,3,0.84)">
                    <a href="{{url('/')}}" class="example-1">
                    <i class="icon-home text-white " style=""></i>
                    <span style="font-size: 2rem; color: white;" class="">سفارشات الان</span>
                        <span class="new-order2"> جدید </span>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-basket"></i>
                        <span>مدیریت محصولات</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('/categories')}}" class="">
                                <i class="icon-basket   "></i>
                                <span> دسته بندی ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/manage-foods')}}" class="">
                                <i class="icon-briefcase"></i>
                                <span> غذاها</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/manage-dessert')}}" class="">
                                <i class="icon-clock"></i>
                                <span> پیش غذاها و مخلفات</span>
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
                            <a href="{{url('/today-report')}}" class="">
                                <i class="icon-briefcase"></i>
                                <span>فروش امروز</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/all-report')}}" class="">
                                <i class="icon-clock"></i>
                                <span> سایر</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{url("/discount-code")}}" class="" data-toggle="">
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
                            <a href="{{url('/profile/image')}}" class="">
                                <i class="icon-picture"></i>
                                <span> تصویر </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/profile/address')}}" class="">
                                <i class="icon-book-open"></i>
                                <span> آدرس و تلفن </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/profile/password')}}" class="">
                                <i class="icon-lock"></i>
                                <span>تغییر رمز</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--<li class="">--}}
                    {{--<a href="{{url("addgold")}}" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-tag"></i>--}}
                        {{--<span>طلا ها</span>--}}
                    {{--</a>--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("addgold")}}" class="">--}}
                                {{--<i class="icon-tag"></i>--}}
                                {{--<span>مدیریت طلا ها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="{{url("listgold")}}" class="">--}}
                        {{--<i class="icon-tag"></i>--}}
                        {{--<span>مدیریت دیتاها</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="">--}}
                    {{--<a href="{{url("addmobile")}}" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-call-end"></i>--}}
                        {{--<span>موبایل ها</span>--}}
                    {{--</a>--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("addmobilebrand")}}" class="">--}}
                                {{--<i class="icon-call-end"></i>--}}
                                {{--<span>مدیریت برند ها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("addmobile")}}" class="">--}}
                                {{--<i class="icon-call-end"></i>--}}
                                {{--<span>مدیریت موبایل ها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("mobileoptions")}}" class="">--}}
                                {{--<i class="icon-call-end"></i>--}}
                                {{--<span>مدیریت امکانات</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("listmobile")}}" class="">--}}
                                {{--<i class="icon-call-end"></i>--}}
                                {{--<span>مدیریت دیتاها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="">--}}
                    {{--<a href="{{url("addcarco")}}" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-direction"></i>--}}
                        {{--<span>خودروها</span>--}}
                    {{--</a>--}}
                    {{--<ul>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("addcarco")}}" class="">--}}
                                {{--<i class="icon-direction"></i>--}}
                                {{--<span>مدیریت شرکت ها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("caroptions")}}" class="">--}}
                                {{--<i class="icon-direction"></i>--}}
                                {{--<span>مدیریت امکانات</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("addcar")}}" class="">--}}
                                {{--<i class="icon-direction"></i>--}}
                                {{--<span>مدیریت خودروها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}


                {{--<li class="">--}}
                    {{--<a href="{{url("addmaghale")}}" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-notebook"></i>--}}
                        {{--<span>مقالات و روزنامه ها</span>--}}
                    {{--</a>--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("addnews")}}" class="">--}}
                                {{--<i class="icon-notebook"></i>--}}
                                {{--<span>افزودن مقاله</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("listnews")}}" class="">--}}
                                {{--<i class="icon-notebook"></i>--}}
                                {{--<span>لیست مقالات</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("addcatenewspaper")}}" class="">--}}
                                {{--<i class="icon-notebook"></i>--}}
                                {{--<span>دسته بندی روزنامه ها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("addnewspaper")}}" class="">--}}
                                {{--<i class="icon-notebook"></i>--}}
                                {{--<span>افزودن روزنامه</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="{{url("listnewspaper")}}" class="">--}}
                                {{--<i class="icon-notebook"></i>--}}
                                {{--<span>مدیریت روزنامه ها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                    {{--<a href="{{url("files")}}" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-cloud-upload"></i>--}}
                        {{--<span>آپلود</span>--}}
                    {{--</a>--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a href="{{url("manage-files")}}" class="">--}}
                                {{--<i class="icon-cloud-upload"></i>--}}
                                {{--<span>مدیریت فایلها</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul><!-- /#side-menu -->
        </div><!-- /.side-menu-container -->
    </div><!-- /#sidebar -->
</div>
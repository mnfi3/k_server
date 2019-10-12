
<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <title>پنل مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="پنل مدیریت">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

    @include('include.css')
    @include('include.js')
</head>
<body class="active-ripple theme-blue fix-header sidebar-extra ">
@include('sys-admin.include.nav-bar')

<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box border shadow round">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h3 class="title">
                                    <i class="icon-basket"></i>
                                    ویرایش اطلاعات رستوران
                                </h3>
                            </div>
                            <div class="buttons-box">
                                <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                                    <i class="icon-arrow-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="portlet-body">
                                <form role="form" action="{{url('/admin/res/update')}}" method="post" enctype="multipart/form-data" onsubmit="return confirm('آیا مطمئن هستید؟')">
                                    {{csrf_field()}}
                                    <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>نام رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="{{$restaurant->name}}" placeholder="نام رستوران" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>ایمیل رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="email" name="email" class="form-control" disabled value="{{$restaurant->email}}" placeholder="ایمیل رستوران" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>آدرس رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="address" class="form-control" value="{{$restaurant->address}}" placeholder="آدرس رستوران" required>
                                            </div>
                                        </div>

                                        <div class="form-group relative">
                                            <input type="file" name="image" class="form-control" >
                                            <label>عکس</label>
                                            <div class="input-group round">
                                                <input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید" >
                                                <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-info">
                                        <i class="icon-picture"></i>
                                        آپلود عکس
                                        </button>
                                        </span>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->


                                        <div class="form-group">
                                            <label>تلفن رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="phone" class="form-control" value="{{$restaurant->phone}}" placeholder="اجباری" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>کیوسک مربوطه</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <select class="form-control" name="kiosk_id" required>
                                                    @foreach($kiosks as $kiosk)
                                                        <option value="{{$kiosk->id}}"
                                                        @if($restaurant->kiosks != null)
                                                            @if($restaurant->kiosks[0]->id == $kiosk->id)
                                                                selected
                                                            @endif
                                                        @endif

                                                            >{{$kiosk->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->

                                        <label class="text-danger" >اگر می خواهید پسورد ها تغییر نکنند خالی بگذارید</label>

                                        <div class="form-group">
                                            <label>رمز عبور</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="password" name="password" class="form-control" value="" placeholder="رمز عبور رستوران">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>پسورد اپلیکیشن (این رمز هنگام ورود کیوسک استفاده خواهد شد)</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="password" name="app_password" class="form-control" value="" placeholder="رمز عبور اپلیکیشن">
                                            </div>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-info btn-round">
                                            <i class="icon-check"></i>
                                            ذخیره
                                        </button>

                                        @if(\Illuminate\Support\Facades\Session::get('mess') != null)
                                            <label>{{\Illuminate\Support\Facades\Session::get('mess')}}</label>
                                        @endif
                                    </div><!-- /.form-actions -->
                                </form>
                            </div>
                        </div><!-- /.portlet-body -->
                    </div><!-- /.portlet -->

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="portlet box border shadow round">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h3 class="title">
                            <i class="icon-basket"></i>
                            لیست فروش
                        </h3>
                    </div>
                    <div class="buttons-box">

                        <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                        <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                            <i class="icon-arrow-up"></i>
                        </a>

                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet-body">

                        <div class="pull-left">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="data-table">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>جزئیات</th>
                                    <th>زمان</th>
                                    <th>قیمت</th>
                                    <th>قیمت با تخفیف(پرداخت شده)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=0)
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="text-black"> {{++$i}} </td>
                                        {{--                                        <td class="text-black" >{{$order->order_number}}</td>--}}
                                        <td class="text-black" style="max-width: 280px">

                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام</th>
                                                    <th>تعداد</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($j=0)
                                                @foreach($order->content as $order_content)
                                                    <tr class="" style="background-color: @if($j % 2 == 0 ) #ff5c1a @else #ffcf14 @endif">
                                                        <td>{{++$j}}</td>
                                                        <td class="text-black" style="max-width: 160px">{{$order_content->product->name}} </td>
                                                        <td>{{$order_content->count}} عدد</td>
                                                    </tr>
                                                    @foreach($order_content->desserts as $dessert_item)
                                                        <tr class="" style="background-color: @if($j % 2 == 0 ) #ff5c1a @else #ffcf14 @endif">
                                                            <td>{{++$j}}</td>
                                                            <td class="text-black" style="max-width: 160px">{{$dessert_item->dessert->name}}</td>
                                                            <td>
                                                                {{$order_content->count}} عدد
                                                            </td>
                                                        </tr>
                                                @endforeach
                                                @endforeach
                                            </table>




                                        </td>
                                        @php($date = new \App\Http\Controllers\Util\Pdate())
                                        @php($d = explode(' ', $order->local_time)[0])
                                        @php($time = explode(' ', $order->local_time)[1])


                                        <td class="text-black" >{{$time}} --- {{$date->toPersian($d, 'Y/m/d')}}  </td>
                                        <td class="text-black" >{{number_format($order->cost)}} تومان</td>
                                        <td class="text-black" >{{number_format($order->d_cost)}} تومان</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="pull-left">
                            {{ $orders->links() }}
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.portlet-body -->
                </div><!-- /.portlet -->
            </div><!-- /.col-md-12 -->
        </div>

        <!-- BEGIN PAGE JAVASCRIPT -->
        <script src="{{ asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/pages/datatable.js') }}"></script>
        <link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    </div>
</div>
</div>
</body>





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
    <link type="text/css" rel="stylesheet" href="{{asset('css/persian-datepicker.min.css')}}" />

    @include('include.css')
    @include('include.js')
</head>
<body class="active-ripple theme-blue fix-header sidebar-extra ">
@include('include.nav-bar')
<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box border shadow round">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h3 class="title">
                                    <i class="icon-fire"></i>
                                    گزارش گیری
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
                                <form role="form" action="{{url('/restaurant/panel/all-report')}}" method="get" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>از تاریخ</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="from_date" class="form-control start-day " @if(!is_null($from_date)) value="{{$from_date}}" @endif placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>تا تاریخ</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input  type="text"  name="to_date" class="form-control start-day example1"  @if(!is_null($to_date)) value="{{$to_date}}" @endif required placeholder="">
                                            </div>
                                        </div>
                                        </div>

                                    <div class="form-actions">
                                        <button type="submit" name="submit" class="btn btn-info btn-round">
                                            <i class="icon-check"></i>
                                            جستجو
                                        </button>
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
                            <i class="icon-user"></i>
                            نتیجه جستجو
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
                            <button class="btn-curve btn-success p-3" id="exportreptoexcelfile"  onclick="excelReport(this)">
                                <i class="fa fa-file-excel-o"></i>
                                دریافت اکسل
                            </button>
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


        @include('include.date-picker-js')

    </div>
</div>
</div>
</body>




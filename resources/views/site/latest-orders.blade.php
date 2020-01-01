<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <title>پنل مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="پنل مدیریت">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

    @include('include.css')
    @include('include.js')
</head>
<body class="active-ripple theme-blue fix-header sidebar-extra ">
@include('include.nav-bar')
<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box border shadow round">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h3 class="title">
                            <i class="icon-user"></i>
                            لیست سفارشات
                        </h3>
                    </div>
                    <div class="buttons-box">

                        <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه"
                           href="#">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                        <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن"
                           href="#">
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
                                    <th>شماره سفارش</th>
                                    <th>جزئیات</th>
                                    <th>زمان</th>
                                    <th>مبلغ پرداخت شده</th>
                                    <th>بیرون بر</th>
                                    <th>وضعیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=0)
                                @foreach($orders as $order)
                                    <tr>
                                        <td> {{++$i}} <span class="new-order">سفارش جدید </span></td>
                                        <td class="text-black">{{$order->order_number}}</td>
                                        <td class="text-black" style="max-width: 280px">

                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام</th>
                                                    <th>تعداد</th>
                                                    <th>جمع</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($j=0)
                                                @foreach($order->items as $item)
                                                    <tr class=""
                                                        style="background-color: @if($j % 2 == 0 ) #ff5c1a @else #ffcf14 @endif">
                                                        <td>{{++$j}}</td>
                                                        <td class="text-black"
                                                            style="max-width: 160px">{{$item->product->name}} </td>
                                                        <td>{{$item->count}} عدد</td>
                                                        <td> تومان {{number_format($item->cost)}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </td>

                                        <td class="text-black">{{\App\Http\Controllers\Util\Pdate::persianTime($order->local_time, true)}} </td>
                                        <td class="text-black">{{number_format($order->d_cost)}} تومان</td>
                                        @if($order->is_out == 0)
                                            <td class="text-black">خیر</td>
                                        @else
                                            <td class="text-black">بله</td>
                                        @endif
                                        <td>
                                            <a class="btn btn-sm del-btn "
                                               href="{{url('/restaurant/panel/order/deliver', $order->id)}}">
                                                تحویل داده شد
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div><!-- /.table-responsive -->
                        <div class="pull-left">
                            {{--{{ $currencyList->links() }}--}}
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




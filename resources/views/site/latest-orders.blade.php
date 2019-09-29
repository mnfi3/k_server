
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
                                    {{--<th>آیکون</th>--}}
                                    <th>نام</th>
                                    <th>زمان</th>
                                    <th>قیمت</th>
                                    <th>وضعیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> 1 <span class="new-order">سفارش جدید </span></td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black" style="max-width: 160px"> پیتزا سالامون</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>2</td>
                                                <td class="text-black" style="max-width: 160px"> پیتزا پپرونی</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                            </tr>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>3</td>
                                                <td class="text-black" style="max-width: 160px">دوغ</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    2 عدد
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری </td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>
                                    <td class="text-black" >1397/06/20 , 18:30</td>
                                    <td class="text-black" >35900 تومان</td>
                                    <td>
                                        <a class="btn btn-sm del-btn "  href="#">
                                            آماده تحویل
                                        </a>
                                    </td>
                                </tr>
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




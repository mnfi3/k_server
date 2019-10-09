
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
                                <form role="form" action="InsertNewDCurrency" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>نام رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="نام رستوران">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>آدرس رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="آدرس رستوران">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>ایمیل رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="email" name="name" class="form-control" value="" placeholder="ایمیل رستوران">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>رمز عبور</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="password" name="name" class="form-control" value="" placeholder="رمز عبور رستوران">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>client key رستوران</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="اجباری">
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info btn-round">
                                            <i class="icon-check"></i>
                                            ذخیره
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
                            <table class="table table-hover table-striped" id="فروش" style="direction: rtl !important;">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>جزئیات سفارش</th>
                                    <th>تاریخ</th>
                                    <th>مبلغ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black"> پیتزا سالامون پیتزا سالامون </td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    20,000 تومان
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
                                                <td>
                                                    160,000 تومان
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
                                                <td>
                                                    100,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری</td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                                <td>
                                                    15,230 تومان
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>
                                    <td>
                                        1398/06/24,12:49
                                    </td>
                                    <td>
                                        38,600 تومان
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black"> پیتزا سالامون پیتزا سالامون </td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    20,000 تومان
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
                                                <td>
                                                    160,000 تومان
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
                                                <td>
                                                    100,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری</td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                                <td>
                                                    15,230 تومان
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>  <td>
                                        1398/06/24,15:49
                                    </td>
                                    <td>
                                        68,600 تومان
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black"> پیتزا سالامون پیتزا سالامون </td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    20,000 تومان
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
                                                <td>
                                                    160,000 تومان
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
                                                <td>
                                                    100,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری</td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                                <td>
                                                    15,230 تومان
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>  <td>
                                        1398/06/24,19:21
                                    </td>
                                    <td>
                                        26,000 تومان
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td class="text-black" style="max-width: 160px">

                                    </td>
                                    <td>
                                        <strong style="color: #ff0004">مجموع :</strong>
                                    </td>
                                    <td>
                                        263,000 تومان
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

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




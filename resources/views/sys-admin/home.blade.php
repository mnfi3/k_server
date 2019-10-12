
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
                                    افزودن کیوسک
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
                                <form role="form" action="{{url('/admin/kiosk/insert')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>نام کیوسک</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="نام کیوسک" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>نام کاربری</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="user_name" class="form-control" value="" placeholder="اجباری" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>client key کیوسک</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="client_key" class="form-control" value="" placeholder="اجباری" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>رمز عبور</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="password" name="pass1" class="form-control" value="" placeholder="اجباری" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>تکرار رمز عبور</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="password" name="pass2" class="form-control" value="" placeholder="اجباری" required>
                                            </div>
                                        </div>




                                        <button type="submit" name="submit" class="btn btn-info btn-round">
                                            <i class="icon-check"></i>
                                            ذخیره
                                        </button>

                                        @if(\Illuminate\Support\Facades\Session::get('mess') != null)
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{Illuminate\Support\Facades\Session::get('mess')}}</strong>
                                            </span>
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
                            لیست کیوسک ها
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
                                    <th>نام کیوسک</th>
                                    <th>نام کاربری</th>
                                    <th>client_key</th>
                                    <th>جزئیات</th>
                                    {{--<th>حذف</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=0)
                                @foreach($kiosks as $kiosk)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td class="text-black" >{{$kiosk->name}}</td>
                                    <td class="text-black" >{{$kiosk->user_name}}</td>
                                    <td class="text-black" >{{$kiosk->client_key}}</td>

                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/admin/kiosk-edit', $kiosk->id)}}">
                                            ویرایش
                                        </a>
                                    </td>

                                    {{--<td>--}}
                                        {{--<form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >--}}
                                            {{--@csrf--}}
                                            {{--<button class="btn btn-sm del-btn"  type="submit">--}}
                                                {{--حذف--}}
                                            {{--</button>--}}

                                        {{--</form>--}}
                                    {{--</td>--}}
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                        <div class="pull-left">
                            {{ $kiosks->links() }}
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




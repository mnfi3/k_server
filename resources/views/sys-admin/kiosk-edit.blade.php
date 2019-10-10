
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
                                    ویرایش اطلاعات کیوسک
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
                                <form role="form" action="{{url('/admin/kiosk/update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="kiosk_id" value="{{$kiosk->id}}">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>نام کیوسک</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="{{$kiosk->name}}" placeholder="نام " required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>نام کاربری کیوسک</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="user_name" class="form-control" disabled value="{{$kiosk->user_name}}" placeholder="اجباری" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>client key </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="client_key" class="form-control" value="{{$kiosk->client_key}}" placeholder="اجباری" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>رمز عبور (اگر میخواهید رمز عبور تغییر نکند چیزی در این بخش وارد نکنید)</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="password" name="password" class="form-control" value="" placeholder="اگر میخواهید رمز عبور تغییر نکند چیزی در این بخش وارد نکنید" >


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
        <!-- BEGIN PAGE JAVASCRIPT -->
        <script src="{{ asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/pages/datatable.js') }}"></script>
        <link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    </div>
</div>
</div>
</body>




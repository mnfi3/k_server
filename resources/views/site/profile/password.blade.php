
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
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box border shadow round">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h3 class="title">
                                    <i class="icon-lock"></i>
                                   تغییر رمز عبور
                                </h3>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="portlet-body">
                                <form role="form" action="{{url('/restaurant/panel/profile/password/update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>رمز فعلی </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-lock"></i>
                                                </span>
                                                <input type="password" name="old_pass" class="form-control" value="" required placeholder="رمز فعلی خود را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>رمز جدید </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-lock"></i>
                                                </span>
                                                <input type="password" name="new_pass1" class="form-control" value="" required placeholder="رمز جدید را وارد کنید (حداقل 6 گکاراکتر)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>تکرار رمز جدید </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-lock"></i>
                                                </span>
                                                <input type="password" name="new_pass2" class="form-control" value="" required placeholder="تکرار رمز جدید ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="submit" class="btn btn-danger btn-round">
                                            <i class="fa fa-edit"></i>
                                            ویرایش
                                        </button>

                                        @if(\Illuminate\Support\Facades\Session::get('fail') != null)
                                        <label class="text-danger " style="text-align: center"> {{\Illuminate\Support\Facades\Session::get('fail')}}</label>
                                        @elseif(\Illuminate\Support\Facades\Session::get('success') != null)
                                        <label class="text-success " style="text-align: center">  {{\Illuminate\Support\Facades\Session::get('success')}}</label>
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




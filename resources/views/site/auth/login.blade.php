
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
<div class="fixed-modal-bg"></div>
<div class="modal-page shadow" style="border-radius: 5px;background-color:rgba(0, 0, 0, 0.81) ">
    <div class="container-fluid">
        <div class="row " style="direction: rtl!important;">
            <div class="col-md-12 ">
                <div class="logo-con m-t-10 m-b-10">
                    <h1 class="text-center text-white" style="font-size: 2.9rem;font-weight: 800;color: white">ورود به پنل مدیریت</h1>
                </div>
                <hr>
                <form id="form" class="m-t-30 m-b-30"  action="{{ url('/login') }}" method="POST" role="form">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email" class="sr-only">رایانامه</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-envelope"></i>
                                    </span>
                            <input id="email" type="email" class="form-control ltr text-left" placeholder="نام کاربری" name="email" value="{{ old('email') }}" required autofocus>

                        </div><!-- /.input-group -->
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="password" class="sr-only">رمز عبور</label>
                        <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                            <input id="password" type="password" class="form-control  ltr text-left" placeholder="رمز عبور" name="password" required>


                        </div><!-- /.input-group -->
                            <span class="help-block">
                                        <strong></strong>
                                    </span>
                    </div><!-- /.form-group -->

                    <button class="btn btn-info btn-round btn-block" type="submit">
                        <i class="icon-paper-plane font-lg"></i>
                        ورود
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('js/pages/datatable.js') }}"></script>
<link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">


</body>





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
                                    <i class="icon-fire"></i>
                                  (حداکثر 50 کاراکتر) افزودن متن خوش آمد گویی رستوران
                                </h3>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="portlet-body">
                                <form role="form" action="{{url('/restaurant/panel/profile/description-update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">
                                        <div class="form-group relative">
                                            <input type="text" name="description"  class="form-control" value="{{$description}}" maxlength="50" required>
                                            {{--<label>متن خوش آمدگویی</label>--}}
                                            {{--<div class="input-group round">--}}
                                                {{--<input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید">--}}
                                                {{--<span class="input-group-btn input-group-sm">--}}
                                                {{----}}
                                            {{--</span>--}}
                                            {{--</div><!-- /.input-group -->--}}
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="submit" class="btn btn-info btn-round">
                                            <i class="icon-cloud-upload"></i>
                                            ذخیره
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div><!-- /.portlet-body -->
                    </div><!-- /.portlet -->
                </div>
            </div>
        </div>

        <script src="{{asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{asset('js/pages/datatable.js') }}"></script>
        <link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    </div>
</div>
</div>
</body>




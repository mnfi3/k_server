
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
                                    افزودن دسته بندی
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
                                            <label>عنوان دسته بندی</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="نام غذا وارد شود">
                                            </div>
                                        </div>

                                        <div class="form-group relative">
                                            <input type="file" name="filename[]" class="form-control">
                                            <label>عکس</label>
                                            <div class="input-group round">
                                                <input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید">
                                                <span class="input-group-btn input-group-sm">
                                                <button type="button" class="btn btn-info">
                                                    <i class="icon-picture"></i>
                                                    آپلود عکس
                                                </button>
                                            </span>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="form-actions">
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
                            <i class="icon-user"></i>
                            همه دسته بندی ها
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
                                    <th>حذف</th>
                                    <th>ویرایش</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    {{--<td><img src="{{$currency->filename}}" height="35" class="rounded float-right" alt="{{$currency->name}}"></td>--}}
                                    <td class="text-black" >نوشیدنی های سرد</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                            <button class="btn btn-sm del-btn"  type="submit">
                                                حذف
                                            </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/category-edit')}}">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    {{--<td><img src="{{$currency->filename}}" height="35" class="rounded float-right" alt="{{$currency->name}}"></td>--}}
                                    <td contenteditable="true" >فست فود</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                            <button class="btn btn-sm del-btn"  type="submit">
                                                حذف
                                            </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/category-edit')}}">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    {{--<td><img src="{{$currency->filename}}" height="35" class="rounded float-right" alt="{{$currency->name}}"></td>--}}
                                    <td contenteditable="true" >پیش غذا</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                            <button class="btn btn-sm del-btn"  type="submit">
                                                حذف
                                            </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/category-edit')}}">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    {{--<td><img src="{{$currency->filename}}" height="35" class="rounded float-right" alt="{{$currency->name}}"></td>--}}
                                    <td contenteditable="true" >غذاهی دریایی</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                             <button class="btn btn-sm del-btn"  type="submit">
                                                   حذف
                                             </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/category-edit')}}">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
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




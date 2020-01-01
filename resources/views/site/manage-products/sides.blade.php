
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
                                    افزودن مخلفات و همراه غذا
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
                                <form role="form" action="{{url('/restaurant/panel/side/insert')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="form-body">
                                        <div class="form-group">
                                            <label>نام </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input required type="text" name="name" class="form-control" value="" placeholder="نام وارد شود">
                                            </div>
                                        </div>



                                        <div class="form-group relative">
                                            <input type="file" name="image" class="form-control" required>
                                            <label>تصویر</label>
                                            <div class="input-group round">
                                                <input type="text" class="form-control file-input" placeholder="برای انتخاب تصویر کلیک کنید" >
                                                <span class="input-group-btn input-group-sm">
                                                <button type="button" class="btn btn-info">
                                                    <i class="icon-picture"></i>
                                                    انتخاب تصویر
                                                </button>
                                            </span>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>قیمت (تومان) : </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="number" name="price" class="form-control" value="" placeholder="قیمت وارد شود (تومان)" required>
                                            </div>
                                        </div>

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
                            لیست  پیش غذاها و مخلفات
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
                                    <th>آیکون</th>
                                    <th>نام</th>
                                    <th>قیمت</th>
                                    <th>وضعیت موجودی</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=0)
                                @foreach($sides as $side)
                                    <tr @if($side->is_available == 0) style="background: #ff6363;" @endif>
                                        <td>{{++$i}}</td>
                                        <td><img src="{{asset($side->image)}}" height="55" class="rounded float-right" ></td>
                                        <td class="text-black" >{{$side->name}}</td>
                                        <td class="text-black" >{{number_format($side->price)}} تومان </td>
                                        @if($side->is_available == 1)
                                        <td>
                                            <a class="btn btn-warning del-edit "  href="{{url('/restaurant/panel/food/available', $side->id)}}">
                                                تمام شد
                                            </a>
                                        </td>
                                        @else
                                            <td class="">
                                                <a class="btn btn-sm del-edit "  href="{{url('/restaurant/panel/food/available', $side->id)}}">
                                                    موجود شد
                                                </a>
                                            </td>
                                        @endif
                                        <td>
                                            <a class="btn btn-sm del-edit "  href="{{url('/restaurant/panel/side-edit', $side->id)}}">
                                                ویرایش
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{url('/restaurant/panel/dessert/delete')}}" method="post"  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                                @csrf
                                                <input type="hidden" name="side_id" value="{{$side->id}}">
                                                <button class="btn btn-sm del-btn"  type="submit">
                                                    حذف
                                                </button>

                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
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




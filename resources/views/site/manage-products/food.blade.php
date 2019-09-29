
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
                                    افزودن غذا
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
                                                <label>نام غذا</label>
                                                <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                    <input type="text" name="name" class="form-control" value="" placeholder="نام غذا وارد شود">
                                                </div>
                                            </div>

                                        <div class="form-group">
                                            <label>دسته بندی</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <select class="form-control" name="status">
                                                    <option value="1" >فست فود</option>
                                                    <option value="2">نوشیدنی ها </option>
                                                    <option value="3">پیش غذاها </option>
                                                    <option value="4">نوشیدنی های گرم </option>
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->

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

                                        <div class="form-group">
                                            <label>قیمت اصلی</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="number" name="name" class="form-control" value="" placeholder="قیمت به تومان وارد شود">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">قیمت با تخفیف</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="number" name="name" class="form-control" value="" placeholder="قیمت به تومان وارد شود">
                                            </div>
                                        </div>
                                        <div class="form-group  ">
                                            <label for="price">دسرهای همراه این غذا</label>
                                            <div class="row selection" style="background-color: rgba(244,255,167,0.84); border: 2px #c4c4c4 solid; border-radius: 4px; margin: 0px 50px;padding: 10px;text-align: center">
                                                <div class="col-sm-3">
                                                    <div class=" d-flex flex-wrap align-items-stretch justify-content-start " style="">
                                                        <div class="">
                                                   <span class="custom-control " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class=" d-flex flex-wrap align-items-stretch justify-content-start " style="">
                                                        <div class="">
                                                   <span class="custom-control " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class=" d-flex flex-wrap align-items-stretch justify-content-start " style="">
                                                        <div class="">
                                                   <span class="custom-control " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class=" d-flex flex-wrap align-items-stretch justify-content-start " style="">
                                                        <div class="">
                                                   <span class="custom-control " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                        <div class=" p-1 mr-2 ">
                                                   <span class="custom-control  " style="">
                                                           <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="fields[]" value="">
                                                           <label class="custom-control-label text-dark set-font" for="defaultUnchecked">پیاز</label>
                                                  </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                              </div>

                                        <div class="form-group">
                                            <label>توضیحات </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="توضیحات مختصر">
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
                            لیست غذاها
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
                                    <td class="text-black" >سالاد فصل</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                            <button class="btn btn-sm del-btn"  type="submit">
                                                حذف
                                            </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/food-edit')}}">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    {{--<td><img src="{{$currency->filename}}" height="35" class="rounded float-right" alt="{{$currency->name}}"></td>--}}
                                    <td contenteditable="true" >سالاد فصل</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                            <button class="btn btn-sm del-btn"  type="submit">
                                                حذف
                                            </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/food-edit')}}">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    {{--<td><img src="{{$currency->filename}}" height="35" class="rounded float-right" alt="{{$currency->name}}"></td>--}}
                                    <td contenteditable="true" >سالاد فصل</td>
                                    <td>
                                        <form action=""  onsubmit="return confirm('آیا مطمئن هستید؟')" >
                                            @csrf
                                            <button class="btn btn-sm del-btn"  type="submit">
                                                حذف
                                            </button>

                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm del-edit "  href="{{url('/food-edit')}}">
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





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
                                    ویرایش غذا
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
                                <form role="form" action="{{url('/restaurant/panel/food-update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <input type="hidden" name="product_id" value="{{$product->id}}">

                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>دسته بندی</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <select class="form-control" name="category_id" required>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if($product->category_id == $category->id) selected @endif >{{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->


                                        <div class="form-group">
                                            <label>نام غذا</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input required type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="نام غذا وارد شود">
                                            </div>
                                        </div>



                                        <div class="form-group relative">
                                            <input type="file" name="image" class="form-control" @if(strlen($product->image ) < 2) required @endif/>
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
                                                <input type="number" name="price" class="form-control" value="{{$product->price}}" placeholder="قیمت وارد شود (تومان)" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>توضیحات </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="description" class="form-control" value="{{$product->description}}" placeholder="توضیحات مختصر (می توانید مواد تشکیل دهنده غذا را وارد کنید)">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">درصد تخفیف (در صورتی که می خواهید برای این غذا به صورت تکی تخفیف اعمال شود درصد تخفیف را وارد کنید)</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <select class="form-control" name="discount_percent">
                                                    @for($i=0;$i<91;$i++)
                                                        <option value="{{$i}}" @if($product->discount_percent == $i) selected @endif >{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">آیا میخواهید این غذا به عنوان غذای پیشنهادی اضافه شود؟</label>
                                            <div class="input-group round">
                                                <input type="checkbox" name="is_suggest" @if($product->is_suggest == 1) checked @endif >
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



        <script src="{{ asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/pages/datatable.js') }}"></script>
        <link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    </div>
</div>
</div>
</body>




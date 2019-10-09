
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
            <div class="portlet box border shadow round">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h3 class="title">
                            <i class="icon-user"></i>
                            لیست  فروش امروز
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
                            <button class="btn-curve btn-success p-3" id="exportreptoexcelfile"  onclick="excelReport(this)">
                                <i class="fa fa-file-excel-o"></i>
                                دریافت اکسل
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="data-table">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>جزئیات</th>
                                    <th>زمان</th>
                                    <th>قیمت</th>
                                    <th>قیمت با تخفیف(پرداخت شده)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=0)
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="text-black"> {{++$i}} </td>
{{--                                        <td class="text-black" >{{$order->order_number}}</td>--}}
                                        <td class="text-black" style="max-width: 280px">

                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام</th>
                                                    <th>تعداد</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($j=0)
                                                @foreach($order->content as $order_content)
                                                    <tr class="" style="background-color: @if($j % 2 == 0 ) #ff5c1a @else #ffcf14 @endif">
                                                        <td>{{++$j}}</td>
                                                        <td class="text-black" style="max-width: 160px">{{$order_content->product->name}} </td>
                                                        <td>{{$order_content->count}} عدد</td>
                                                    </tr>
                                                    @foreach($order_content->desserts as $dessert_item)
                                                        <tr class="" style="background-color: @if($j % 2 == 0 ) #ff5c1a @else #ffcf14 @endif">
                                                            <td>{{++$j}}</td>
                                                            <td class="text-black" style="max-width: 160px">{{$dessert_item->dessert->name}}</td>
                                                            <td>
                                                                {{$order_content->count}} عدد
                                                            </td>
                                                        </tr>
                                                @endforeach
                                                @endforeach
                                            </table>




                                        </td>
                                        @php($date = new \App\Http\Controllers\Util\Pdate())
                                        @php($d = explode(' ', $order->local_time)[0])
                                        @php($time = explode(' ', $order->local_time)[1])


                                        <td class="text-black" >{{$time}} --- {{$date->toPersian($d, 'Y/m/d')}}  </td>
                                        <td class="text-black" >{{number_format($order->cost)}} تومان</td>
                                        <td class="text-black" >{{number_format($order->d_cost)}} تومان</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div><!-- /.portlet-body -->
                </div><!-- /.portlet -->
            </div><!-- /.col-md-12 -->
        </div>
        <!-- BEGIN PAGE JAVASCRIPT -->
        <script src="{{ asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/pages/datatable.js') }}"></script>
        {{--<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>--}}
        <script>
          window.excelReport = function (elm) {
            var sheetname = " لیست ";
            var tableId = "فروش";
            tableToExcel(tableId, sheetname);
          }
          $(document).on('click', '#exportreptoexcelfile', function (event) {
            //working great with Arabic without filename
            var sheetname = $("#chainnames").children(":selected").text();
            tableToExcel('students', sheetname);

          });
          var tableToExcel = (function () {
            var uri = 'data:application/vnd.ms-excel;base64,'
              ,
              template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table border="2px"><tr>{table}</table></body></html>'
              , base64 = function (s) {
                return window.btoa(unescape(encodeURIComponent(s)))
              }
              , format = function (s, c) {
                return s.replace(/{(\w+)}/g, function (m, p) {
                  return c[p];
                })
              }
            return function (table, name) {
              var tableId = table
              if (!table.nodeType) table = document.getElementById(table)
              var orginalTable = table.innerHTML
              var lastColValid = false
              if ($(table).hasClass('course-payment')) {
                lastColValid = true
              }
              for (var j = 0; j < table.rows.length; j++) {
                if (j == 3) {
                  table.rows[j].cells[1].width = 180
                  table.rows[j].cells[2].width = 180
                  table.rows[j].cells[3].width = 180
                  try {
                    table.rows[j].cells[4].width = 180
                  } catch (err) {
                  }
                }
                if (!lastColValid) {
                  var lastIndex = $(table.rows[j]).children(":last").index()
                  var firstElm = $(table.rows[j]).children(":first")
                  if ($(firstElm).attr("type") == "hidden") {
                    lastIndex = lastIndex - 1
                    table.rows[j].deleteCell(lastIndex)
                    table.rows[j].deleteCell(lastIndex - 1)
                    table.rows[j].deleteCell(lastIndex - 2)
                  } else if (lastIndex >= 5) {
                    table.rows[j].deleteCell(lastIndex)
                    table.rows[j].deleteCell(lastIndex - 1)
                  }
                }
              }
              // table.innerHTML=table.innerHTML.replace('/?????/g','')
              var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
              table.innerHTML = orginalTable
              // window.location.href = uri + base64(format(template, ctx))
              var dt = new Date();
              var day = dt.getDate();
              var month = dt.getMonth() + 1;
              var year = dt.getFullYear();
              var postfix = day + "." + month + "." + year;
              var result = uri + base64(format(template, ctx));
              var a = document.createElement('a');
              a.href = result;
              a.download = name + tableId + ' _ ' + postfix + '.xls';
              a.click();
              return true;
            }
          })()
        </script>

        <link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    </div>
</div>
</div>


</body>





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
                            <table class="table table-hover table-striped" id="فروش" style="direction: rtl !important;">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>جزئیات سفارش</th>
                                    <th>تاریخ</th>
                                    <th>مبلغ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black"> پیتزا سالامون پیتزا سالامون </td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    20,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>2</td>
                                                <td class="text-black" style="max-width: 160px"> پیتزا پپرونی</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    160,000 تومان
                                                </td>

                                            </tr>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>3</td>
                                                <td class="text-black" style="max-width: 160px">دوغ</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    2 عدد
                                                </td>
                                                <td>
                                                    100,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری</td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                                <td>
                                                    15,230 تومان
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>
                                    <td>
                                       1398/06/24,12:49
                                    </td>
                                    <td>
                                       38,600 تومان
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black"> پیتزا سالامون پیتزا سالامون </td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    20,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>2</td>
                                                <td class="text-black" style="max-width: 160px"> پیتزا پپرونی</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    160,000 تومان
                                                </td>

                                            </tr>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>3</td>
                                                <td class="text-black" style="max-width: 160px">دوغ</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    2 عدد
                                                </td>
                                                <td>
                                                    100,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری</td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                                <td>
                                                    15,230 تومان
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>  <td>
                                       1398/06/24,15:49
                                    </td>
                                    <td>
                                       68,600 تومان
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-black" style="max-width: 280px">

                                        <table class="table table-hover" id="data-table">
                                            <tbody>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>1</td>
                                                <td class="text-black"> پیتزا سالامون پیتزا سالامون </td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    20,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>2</td>
                                                <td class="text-black" style="max-width: 160px"> پیتزا پپرونی</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    5 عدد
                                                </td>
                                                <td>
                                                    160,000 تومان
                                                </td>

                                            </tr>
                                            <tr class="" style="background-color: #ff5c1a">
                                                <td>3</td>
                                                <td class="text-black" style="max-width: 160px">دوغ</td>
                                                <td>
                                                    متوسط
                                                </td>
                                                <td>
                                                    2 عدد
                                                </td>
                                                <td>
                                                    100,000 تومان
                                                </td>
                                            </tr>
                                            <tr style="background-color: #ffcf14">
                                                <td>4</td>
                                                <td class="text-black" style="max-width: 160px"> سیب زمینی پنیری</td>
                                                <td>
                                                    بزرگ
                                                </td>
                                                <td>
                                                    1 عدد
                                                </td>
                                                <td>
                                                    15,230 تومان
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </td>  <td>
                                        1398/06/24,19:21
                                    </td>
                                    <td>
                                        26,000 تومان
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td class="text-black" style="max-width: 160px">

                                    </td>
                                    <td>
                                        <strong style="color: #ff0004">مجموع :</strong>
                                    </td>
                                    <td>
                                        263,000 تومان
                                    </td>
                                </tr>
                                </tfoot>
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




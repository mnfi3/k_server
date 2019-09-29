
<script type="text/javascript">
  $(document).ready(function() {
    $(".example1").pDatepicker();
  });
</script>
<script src="{{asset('js/persian-date.js')}}"></script>
<script src="{{asset('js/persian-datepicker.js')}}"></script>
<script>
  (function ($) {
    $(document).ready(function () {
      console.log('hello Ali');
      $(".start-day").persianDatepicker({
        format: 'YYYY/MM/DD',
        timePicker: {
          enabled: false
        }
      })
    });
  })
  (window.jQuery);
</script>
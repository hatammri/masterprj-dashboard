<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>تایید کد امنیتی | داشبورد مدیریت شرکت صنایع الکترونیک ایران</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../../assets/css/demo.css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/rtl.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css">
    <!-- Vendor -->
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-basic px-4">
      <div class="authentication-inner py-4">
        <!--  Two Steps Verification -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img width="35px" height="35px" viewbox="0 0 30 30" version="1.1" src="{{ asset('/assets/img/logo/sapa.png')}}">

                </span>
                <span class="app-brand-text demo h3 mb-0 fw-bold">صاپا</span>
              </a>
            </div>
            <!-- /Logo -->
            <h5 class="mb-3 secondary-font">تایید شماره‌ همراه</h5>
            <p class="text-start mb-4">
              ما یک کد تایید به موبایل شما ارسال کردیم. کد ارسال شده را در فیلد زیر وارد کنید.
              <span class="fw-bold d-block mt-2">شماره تلفن شما: {{ $user->cellphone}} </span>
            </p>
            <p class="mb-0 fw-semibold">کد 5 رقمی امنیتی را وارد کنید</p>
            <form id="twoStepsForm" action="{{ route('checkOtp') }}" method="POST">
                @csrf
              <div class="mb-3">
                <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                  <input  type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus>
                  <input  type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                  <input  type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                  <input  type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                  <input  type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                </div>
                <!-- Create a hidden field which is combined by 3 fields above -->
                <input type="hidden" name="otp">
                <input type="hidden" name="cellphone" value="{{$user->cellphone}}">

              </div>
              <button class="btn btn-primary d-grid w-100 mb-3" type="submit">ورود به داشبورد</button>
              <div  class="text-center">
                کد را دریافت نکردید؟
                <a id="resendOTPButton" href="javascript:void(0);"> ارسال دوباره </a>

                <span id="resendOTPTime" ></span>

            </div>
            </form>
          </div>
        </div>
        <!-- / Two Steps Verification -->
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>

    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/pages-auth.js"></script>
    <script src="../../assets/js/pages-auth-two-steps.js"></script>
    <script>
         $('#resendOTPButton').hide();
         var user = {!! json_encode($user->toArray()) !!};
         timer();
         console.log(typeof user.login_token);
       function timer() {
        let time="2:00";
        let interval =setInterval(function() {
            let countdown=time.split(':');
            let minutes=parseInt(countdown[0],10);
            let seconds=parseInt(countdown[1],10);
            --seconds;
            minutes=(seconds<0) ? --minutes :minutes;
            if(minutes < 0){
                clearInterval(interval);
                $('#resendOTPTime').hide();
                $('#resendOTPButton').fadeIn();
            };
            seconds=(seconds < 0) ? 59 :seconds;
            seconds=(seconds < 10) ? '0' + seconds :seconds;
            $('#resendOTPTime').html(minutes +':'+ seconds);
            time = minutes+':'+seconds;
        },1000);
    }
        $('#resendOTPButton').click(function(event){
            event.preventDefault();
            console.log("resendOTPButton");
         $.post("{{url('/resend_otp')}}",{
         '_token' :"{{csrf_token()}}",
         'cellphone':user.cellphone
      },function(response,status){
          $('#resendOTPButton').fadeOut();
          timer();
          $('#resendOTPTime').fadeIn();
        }).fail(function(response){
            console.log(response);
           console.log("failded");
    })
     });
    </script>
  </body>
</html>

<?php


namespace App\Http\Controllers\Api\Webservice;


class ms {
  //register
  const REGISTER_NAME_ERROR = 'لطفا نام خود را به درستی وارد کنید';
  const REGISTER_EMAIL_ERROR = 'این ایمیل در سیستم وجود دارد';
  const REGISTER_PASSWORD_ERROR = 'لطفا کلمه عبور بهتری وارد کنید';
  const REGISTER_SUCCESS = 'حساب با موفقیت ایجاد شد';

  //login
  const LOGIN_FAIL_ERROR = 'ورود به حساب کاربری انجام نشد.لطفا ایمیل و رمز عبور خود را با دقت وارد کنید';
  const LOGIN_SUCCESS = 'با موفقیت وارد شدید';
  const LOGIN_RETRY = 'شما قبلا وارد حساب کاربری شده اید';
  const MUST_BE_LOGIN = 'لطفا وارد حساب کاربری خود شوید';

  //logout
  const LOGOUT_SUCCESS = 'با موفقیت از حساب کاربری خارج شدید';

  //server error
  const INTERNAL_SERVER_ERROR = 'مشکلی در سرور به وجود آمده است لطفا دوباره امتحان کنید';

  //data  messages
  const INVALID_DATA = 'اطلاعات ارسال شده صحیح نمی باشند لطفا ورودی ها را بررسی کنید';
  const NOT_FOUND_OBJECT = 'اطلاعات مورد نظر یافت نشد';
  const EXIST_OBJECT = 'اطلاعات مورد نظر قبلا ثبت شده است';

  const PAYMENT_SUCCESS = 'پرداخت با موفقیت انجام شد';
  const PAYMENT_FAILED = 'پرداخت ناموفق بود.لطفا دوباره امتحان کنید';

  const NOT_EXIST_PRRODUCT = 'متاسفانه این محصول موجود نمی باشد';


  //kiosk
  const KIOSK_MUST_LOGIN = 'دستگاه وارد حساب خود نشده است';
  const KIOSK_IS_LOGGEDIN = 'دستگاه وارد حساب خود شده است';
  const KIOSK_APP_KEY_ERROR = 'کلید ارسالی اشتباه است';
  const KIOSK_LOGOUT_SUCCESS = 'دستگاه با موفقیت از حساب خارج شد';
  const KIOSK_LOGIN_SUCCESS = 'دستگاه با موفقیت وارد حساب شد';
  const KIOSK_LOGIN_FAIL = 'اطلاعات ارسال شده اشتباه می باشد';
  const KIOSK_USER_NOT_MATCH = 'این کاربر به این دستگاه متعلق نمی باشد';


  //discount
  const DISCOUNT_VALID = 'کد تخفیف معتبر می باشد';
  const DISCOUNT_INVALID = 'کد تخفیف معتبر نمی باشد';
}
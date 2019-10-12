<?php

namespace App\Http\Controllers\Util;


use Illuminate\Support\Facades\Request;

class Uploader {
  public static function file($file){

    date_default_timezone_set('Asia/Tehran');
    $year_dir = date('Y', time());
    $month_dir = date('m', time());
//    $day_dir = date('d', time());
//    $hour_dir = date('H', time());
    $random = mt_rand(10,100);
    $file_dir = 'uploads/files/' . $year_dir . '/' . $month_dir;
    $name = $random . $file->getClientOriginalName();
    $file->move($file_dir, $name);
    $path = $file_dir .'/'. $name;
    $path = \Illuminate\Support\Facades\Request::root() . '/' . $path;
    return $path;
  }

  public static function image($file){
    date_default_timezone_set('Asia/Tehran');
    $year_dir = date('Y', time());
    $month_dir = date('m', time());
//    $day_dir = date('d', time());
//    $hour_dir = date('H', time());
    $random = mt_rand(10,100);
    $file_dir = 'uploads/images/' . $year_dir . '/' . $month_dir;
    $name = $random . $file->getClientOriginalName();
    $file->move($file_dir, $name);
    $path = $file_dir .'/'. $name;
    $path = \Illuminate\Support\Facades\Request::root() . '/' . $path;
    return $path;
  }

}
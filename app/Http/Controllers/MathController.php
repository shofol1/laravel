<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
//    1.
public function multy($a){
   $data=['name'=>'shofol','address'=>'saidpure','phone'=>'019838','gender'=>"male"];
   $result=$a;
    return view('multy',compact('result','data'));
   }
//    public function sum($b,$c){
//       $sum=$b+$c;
// 2.return view('multy',compact('sum','b'));
//    }

   //3.
   //  public function sub($d,$e){
   //    dd(request());
   //    $sub=$d-$e;
   //    return view('multy')->with('sub',$sub)->with('num',$d);
   // }
    public function sub(){
      $url=request()->path();
      $url=request()->url();
      $method=request()->method();
      return $method;
   }
}

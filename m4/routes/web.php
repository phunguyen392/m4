<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     echo view('welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::post('/login', function (Request $request) {
//     //fs
//     $username = $request->username;
//     $password = $request->password;
//     $xinchao = 'hello ngay moi';
//     $khongxinchao = 'khong hello ngay moi';

//     if ($username == 'admin' && $password == 123) {
//         return view('xinchao_admin', compact(['xinchao', 'khongxinchao']));
//     }
//     return view('login_error');
// });

// Route::get('/show', function () {
//     return view('b1.bt1.show_discount_amount');
// });

Route::get('/input', function () {
    return view('b1.bt1.input');
});

Route::post('/input', function (Request $request) {
        $description = $request->description;
        $list_price = $request->list_price;
        $discount_percent = $request->discount_percent;
        $discountAmount = $list_price * $discount_percent * 0.1;
        $discountPrice = $list_price - $discountAmount;
        return view('b1.bt1.calculator', compact([
            'discountPrice',
            'discountAmount', 
            'description', 
            'list_price', 
            'discount_percent'
        ]));
    }
)->name('dang_nhap');

Route::get('/tra_tu', function(){
    return view('b1.bt2.tra_tu');
});
Route::post('/tra_tu', function(Request $request)
{
    $keyword = $request->keyword;
    $language = $request->language;
    $tiengviet = '';
    $tienganh = '';
$dictionary = [
    "apple" => "táo",
    "banana" => "chuối",
    "cat" => "mèo",
    "dog" => "chó",
    "bao" => "Bảo Bức Bí",
      "nghia" =>     "Nghĩa ngông nghênh",
    "go" => "đi",
    "save" => "lưu",
    "update" => "cập nhật",
    "edit" => "sửa" 
];
    foreach ($dictionary as $key => $value ){
        if($key == $keyword){
            $language = $tiengviet;
             $tiengviet = $value;
            return view('b1.bt2.tra_tv',compact('tiengviet'));
        }
        elseif($value == $keyword){
            $tienganh = $key;
            return view('b1.bt2.tra_ta',compact('tienganh'));
        }
    }
        return view('b1.bt2.loitu');
}
);







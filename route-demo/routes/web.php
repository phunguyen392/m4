<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\NdController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::get('/a', function () {
//     return view('cmm');
// });

//b2
// Route::get('/b', function(){
//     return view('index');

// });
// Route::get('/time_zone', function (Request $request) {
//     if (isset($request->location)) {
//         $location = $request->location;
//         $todayDate = Carbon::now($location)->format('Y-m-d h:i:s');
//         echo 'Múi giờ bạn chọn ' . $location . ' hiện tại đang là: ' . $todayDate;
//     }
// });

//bai thuc hanh 1 Sử dụng route cơ bản

// Route::get('/a', function(){
//     echo "<h2>This is Home page</h2>";
// });
// Route::get('/about', function(){
//    echo "<h2>This is About page</h2>";
// });
// Route::get('/contact', function(){
// echo "<h2>This is Contact page</h2>";
// });
// Route::get('/user/{Phu} ', function($name){
//     echo "<h2>User name is $name</h2>";
// });


// Route::get('/tich/{a}/tinh/{b}', function($a,$b){
//     return 'tich la: '. $a*$b;

// }
// );

// Route::get('/tong/{a?}/tinh/{b?}', function($a='',$b=''){
//  if($a != '' && $b != ''){
//     return $a+$b;
//  }elseif($a == '' || $b == '') {
//     return "k co ts";
//  }
// }
// );


//Khởi tạo ứng dụng Task Management

Route::prefix('cm')->group(function(){
    Route::get('/', function(){
        return view('b2.th3.customer');
    });
    Route::get('/create', function(){
        return view('b2.th3.create');
    })->name('c');
    Route::post('/store',function(){
        //xu ly dl
    });
    Route::get('{id}', function(){
        //hien thi thong tin chi tiet task
    });
    Route::get('{id}/edit',function(){
        //hien thi form chinh sua
    });
    Route::get('{id}/update',function(){
        //cap nhat task
    });
    Route::get('/{id}/delete', function(){
        //xoa task
    });
});
Route::get('/index',function(){
    return view('b2.th3.index');
    
});
Route::get('/customer',function(){
    return view('b2.th3.customer');
});


// Route::get('/customer/create',[CustomerController::class, 'create'])->name('customer.create');
// Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
// Route::get('/customer/edit{id}',[CustomerController::class, 'edit'])->name('customer.edit');
// Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');


//b3/th1/validate-email

Route::get('/',[EmailController::class,'index']);

Route::get('/user',[UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'delete'])->name('user.destroy');
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');

//vd ve controller resource
Route::resource('nds/', NdController::class);
Route::resource('category/', NdController::class);


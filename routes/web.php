<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PageController;
use App\Http\Controllers\TttController;

Route::get('/', function () {
    $value = $_GET['pagePraram'];

    return view('home',
        [
            'viewValue' => $value
        ]
    );
});

Route::get('/page2', [PageController::class, 'pb']);



// Route::get('/content', function(){
//     $value = $_GET['aaa'];

//     return view('content',
//         [
//             'viewValue' => $value
//         ]
//     );
// });

Route::get('/content', [TttController::class, 'tt']);

Route::get('/product', [ProductController::class, 'show']);



<?php

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

use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return response()->json(['name' => '老李', 'age' => 100]);
    //abort(403, 'hha');
    //return 'test';
});

//Route::get('/', [TasksController::class, 'index']);

Route::resource('httpTasks', 'HttpTasksResourceController');
Route::apiResource('apiTasks', 'ApiTasksResourceController');


//Route::view('/', 'welcome');
/*
 * 签名路由
 *
Route::get('/sign', function () {
    return '9999';
})->name('invitations')->middleware('signed');

Route::get('/test/{time}', function ($time) {

    if ($time) {
        $url = URL::temporarySignedRoute('invitations', now()->addMinutes(2), ['invitation' => 12345, 'answer' => 'yes']);
    } else {
        $url = URL::signedRoute('invitations', ['invitation' => 12345, 'answer' => 'yes']);
    }

    return '生成签名路由：' . $url;
});
 * */

/*
Route::group([], function () {
    Route::get('/hi', function () {
        return 'say hi';
    });

    Route::get('/no', function () {
        return 'say no';
    });
});

Route::middleware(['auth', 'throttle:60,1'])->group(function () {
    Route::get('/hi', function () {
        return 'say hi';
    });

    Route::get('/no', function () {
        return 'say no';
    });
});
*/

//Route::any()
//Route::fallback()

/*
Route::domain('api.laravel-book.test')->group(function () {
    // api.laravel-book.test
    Route::get('/book', function () {
        return '访问的是api 路径是: /book';
    });

    Route::get('/study', function () {
        return '访问的是api 路径是: /study';
    });
});

Route::domain('inter.laravel-book.test')->group(function () {
    // api.laravel-book.test
    Route::get('/book', function () {
        return '访问的是interr 路径是: /book';
    });

    Route::get('/study', function () {
        return '访问的是inter 路径是: /study';
    });
});
*/

/*
Route::domain('{account}.laravel-book.test')->group(function () {
    // api.laravel-book.test
    Route::get('/book', function ($account) {
        return "访问的是 {$account} 路径是: /book";
    });

    Route::get('/study', function ($account) {
        return "访问的是 {$account} 路径是: /study";
    });
});
*/

/*
// URI  users/comments/{id}
// Name users.comments.show
Route::name('users.')->prefix('users')->group(function () {
    Route::name('comments.')->prefix('comments')->group(function () {
        Route::get('{id}', function ($id) {
            return "id 是 {$id}";
        })->name('show');
    });
});
*/



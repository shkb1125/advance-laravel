<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
// 2章2-3
use App\Http\Controllers\SessionController;
// 2章2-8 論理削除・物理削除
use App\Models\Person;
// 2章2-9 UUID
use App\Models\Product;
// 2章2-10 複数代入
use App\Http\Controllers\PenController;


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

// Route::get('/test', [TestController::class, 'index']);
// Route::get('/hello', [HelloController::class, 'hello']);

// 0章 0-8
// Route::get('/test/{text}', [TestController::class,'index']);
// Route::get('/test/{text?}', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);
// 0-8問題
// Route::get('/test/{room}/{id}', [TestController::class, 'index']);
// Route::get('/test/{greeting?}', function ($greeting = 'Goodmorning') {
//     return $greeting . '=おはようございます';
// });

// 0章0-9
// Route::get('/', [TestController::class,'index']);

// 0章0-14
Route::get('/', [AuthorController::class, 'index']);

// 0章0-15
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);

// 0章0-16
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);

// 0章0-17
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);

// 1章1-2
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/author/{author}', [AuthorController::class, 'bind']);

// 1章1-4
Route::get('/verror', [AuthorController::class, 'verror']);

// 1章1-5
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});
Route::get('/relation', [AuthorController::class, 'relate']);

// 2章2-3
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

// 2章2-8 論理削除・物理削除
Route::get('/softdelete', function () {
    Person::find(1)->delete();
});

// 論理削除されたレコードの確認
Route::get('/softdelete/get', function () {
    $person = Person::onlyTrashed()->get();
    dd($person);
});

// 論理削除されたレコードの復元
Route::get('/softdelete/store', function () {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});

// 完全削除
Route::get('softdelete/absolute', function () {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});

// 2章2-9 UUID
Route::get('uuid', function () {
    $products = Product::all();
    foreach ($products as $product) {
        echo $product . '<br>';
    }
});

// 2章2-10 複数代入
Route::get('fill', [PenController::class, 'fillPen']);
Route::get('create', [PenController::class, 'createPen']);
Route::get('insert', [PenController::class, 'insertPen']);
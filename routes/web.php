<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\book;
use App\Models\bookrequest;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $book = book::all();
    $status = bookrequest::all();
    return view('users.index' , compact('book' , 'status'));
});



Route::get('/add_author' , [AdminController::class , 'add_author']);
Route::get('/all_author' , [AdminController::class , 'all_author']);
Route::get('/dashboard' , [AdminController::class , 'front_scr']);
Route::post('/upload_author' , [AdminController::class , 'upload_author']);
Route::post('/update_author/{id}' , [AdminController::class , 'update_author']);
Route::get('/delete_author/{id}' , [AdminController::class , 'delete_author']);
Route::get('/edit_author/{id}' , [AdminController::class , 'edit_author']);
Route::get('/req_book' , [AdminController::class , 'req_book']);
Route::get('/approved_req/{id}' , [AdminController::class , 'approved_req']);
Route::get('/canceled_req/{id}' , [AdminController::class , 'canceled_req']);


Route::get('/add_book' , [AuthorController::class , 'add_book']);
Route::post('/upload_book' , [AuthorController::class , 'upload_book']);
Route::get('/all_book/{name}' , [AuthorController::class , 'all_book']);

Route::get('/book_req/{b_id}' , [UserController::class , 'book_req']);
Route::get('/cancel_req/{r_id}' , [UserController::class , 'cancel_req']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = User::all();
        if(Auth::id()){
            if(Auth::User()->usertype == "0" ){
                $book = book::all();
                $status = bookrequest::all();
                return view('users.index' , compact('book' , 'status'));
            }
            elseif(Auth::User()->usertype == "1"){
                $author = User::all();
                return view('author.index' , compact('author'));
            }
            elseif(Auth::User()->usertype == "2"){
                return view('admin.index' , compact('user'));
            }
        }else{
            return redirect()->back();
        }
    })->name('dashboard');
});

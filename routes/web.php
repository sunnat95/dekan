<?php

use App\Http\Controllers\CategorysController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/students', function () {
    return view('talaba');
});

Route::get('/Talabalar', function () {
    return view('Talabalar');
});

Route::get('/Qabul buyrugʼi', function () {
    return view('Qabul buyrugʼi');
});

Route::get('/Kursdan kursga oʼetish buyrugʼi', function () {
    return view('Kursdan kursga oʼetish buyrugʼi');
});

Route::get('/Tashqi pervod buyruq', function () {
    return view('Tashqi pervod buyruq');
});

Route::get('/Ichki pervod buyruq', function () {
    return view('Ichki pervod buyruq');
});


Route::get('/Tiklash', function () {
    return view('Tiklash');
});

Route::get('/Yoʼnalishdan ga', function () {
    return view('Yoʼnalishdan ga');
});

Route::get('/Guruhdan guruhga', function () {
    return view('Guruhdan guruhga');
});

Route::get('/Taʼlim tili', function () {
    return view('Taʼlim tili');
});

Route::get('/Taʼlim shakli', function () {
    return view('Taʼlim shakli');
});

Route::get('/Taʼlim yoʼnalishi', function () {
    return view('Taʼlim yoʼnalishi');
});

Route::get('/Аkademik guruh', function () {
    return view('Аkademik guruh');
});

Route::get('/Qoʼshish', function () {
    return view('Qoʼshish');
});

Route::get('/Kirish', function () {
    return view('Kirish');
});

Route::get('categorys', function () {
    return view('categorys.list');
});
Route::get('category/add', function () {
    return view('categorys.add');
});
Route::group(['prefix'=> 'categorys'], function () {
    Route::get('add',[CategorysController::class,'add'])->name('categorys.add');
    Route::post('create',[CategorysController::class,'create'])->name('categorys.create');
});


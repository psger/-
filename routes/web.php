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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/index', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
//Route::get('/newclass/{id}','AcademyController@displayClass')->where('id', '.*');
//Route::post('/subclass','AcademyController@changeClass');

Route::get('/gradeimport', function () {
    return view('stugrade');
});

//学院班级管理
Route::resource('newclass','AcademychangeController');
//录入班级选择
Route::resource('insertgrade','InsertgradeController');
//传入班级编号显示班级学生
Route::resource('insert','InsertController');
//插入成绩数据
Route::resource('grade','GradeController');
//成绩查询导出
Route::resource('find','FindController');

//******************************************************************
Route::get('/export','ExcelController@export_excel');
Route::get('/import','ExcelController@import_page');
Route::post('/import_excel','ExcelController@import_insert');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

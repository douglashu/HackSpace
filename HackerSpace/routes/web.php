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
//网站主页
Route::get('/', function () {
    $news = \App\HomeNews::all();
    return view('index',[
        'news'=>$news,
    ]);
});
//最新动态
Route::get('news', function (){
    return view('commond.news');
});
//问答社区
Route::get('bbs', function (){
    return view('commond.bbs');
});
//资料库
Route::get('database', function (){
    return view('commond.database');
});
//关于我们
Route::get('about', function (){
    return view('commond.about');
});
//联系我们
Route::get('contact', function (){
    return view('commond.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){
    //网站后台管理页面
    Route::get('home', 'AdminHomeController@index');
    //主页添加新闻
    Route::post('homeadd', 'AdminHomeController@homeAdd');
    //删除某条主页新闻
    Route::get('homedel/{id}', 'AdminHomeController@homeDelete');
    //最新动态（公告）管理页面
    Route::get('announcement', 'AdminHomeController@announcementIndex');
});
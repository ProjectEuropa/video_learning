<?php

Route::get('/', function () {
    return view('top');
});

// マイページ、ダッシュボード
Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');

// コース一覧
Route::get('/courses', function () {
    return view('courses');
})->name('courses');

// 保険コース
Route::get('/course/insurance', function () {
    return view('course.insurance.index');
})->name('insurance');

// Route::get('/course/insurance/primary', function () {
//     return view('course.insurance.primary.index');
// })->name('insurance.primary');

// 不動産コース
Route::get('/course/realestate', function () {
    return view('course.realestate.index');
})->name('realestate');

// Route::get('/course/realestate/primary', function () {
//     return view('course.realestate.primary');
// })->name('realestate.primary');

// 証券投資コース
Route::get('/course/stock', function () {
    return view('course.stock.index');
})->name('stock');

// Route::get('/course/stock/primary', function () {
//     return view('course.stock.primary');
// })->name('stock.primary');

// VideoController制御
Route::get('/videos', 'VideoController@index')->name('video.index');
Route::get('/video/{id}', 'VideoController@show')->name('video.show');
Route::get('/video/new', 'VideoController@create')->name('video.new');

// 保険の動画ページ
Route::get('/video/1', 'VideoController@show')->name('video.insurance.primary');
Route::get('/video/11', 'VideoController@show')->name('video.insurance.medium');
Route::get('/video/21', 'VideoController@show')->name('video.insurance.advanced');

// 不動産の動画ページ
Route::get('/video/31', 'VideoController@show')->name('video.realestate.primary');
Route::get('/video/41', 'VideoController@show')->name('video.realestate.medium');
Route::get('/video/51', 'VideoController@show')->name('video.realestate.advanced');

// 証券投資の動画ページ
Route::get('/video/61', 'VideoController@show')->name('video.stock.primary');
Route::get('/video/71', 'VideoController@show')->name('video.stock.medium');
Route::get('/video/81', 'VideoController@show')->name('video.stock.advanced');


// 記事一覧を表示
Route::get('/articles', 'ArticleController@showList')->name('articles');


// 認証関係
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return redirect('/courses');
});



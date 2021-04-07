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
    return view('start', ['title' =>"Главная", "link" => "Главная"]);
});

Route::get('/information', function () {
    return view('info', ['title' =>"Сведения об образовательной организации", "link" => "Об организации"]);
});

Route::get('/courses', function () {
    return view('courses', ['title' =>"Курсы", "link" => "Курсы"]);
});

Route::get('/course_about', function () {
    return view('course_about', ['title' =>"Наименование курса", "link" => "Курсы"]);
});

Route::get('/teacher', function () {
    return view('teacher', ['title' =>"Колесников Егор Сергеевич", "link" => "Преподаватели"]);
});

Route::get('/events', function () {
    return view('event_calendar', ['title' =>"События", "link" => "Преподаватели"]);
});

Route::get('/news', function () {
    return view('news', ['title' =>"Новости", "link" => "Новости"]);
});

//Route::post("/payment/link",["uses" => "PaymentLink@getLink", "as" => "paymentLink"]);

Route::get('/payment', function () {
    return view('payment',['title' =>"Оплата услуг", "link" => "Оплата"]);
})->name('paymentLink');


Route::get('/news_post_page', function () {
    return view('news_post_page', ['title' =>"Как провести каникулы с пользой ", "link" => "Новости"]);
});

Route::get('/contacts', function () {
    return view('contact', ['title' =>"Контакты ", "link" => "Контакты"]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

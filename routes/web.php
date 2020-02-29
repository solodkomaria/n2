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
Route::get('/n1', function () {
    $arr = ['https://zooclub.ru/attach/43000/43745.jpg',
        'https://dogbuldog.ru/wp-content/uploads/2017/10/sfinks-kot_02.jpg',
        'https://besplatka.ua/aws/70/65/25/94/kotyata-kanadskogo-sfinksa-photo-e0fa.jpg',
        'https://national-travel.ru/wp-content/uploads/wtt-images/2019/01/kanadskiy-sfinks-3-5914531b14905.jpg',
        'https://besplatka.ua/aws/74/59/64/20/kanadskii-sfinks-kotyata-photo-835f.jpg',
        'https://81.img.avito.st/640x480/5620142181.jpg',
        'https://bugaga.ru/uploads/posts/2019-04/1556020166_kotjata-sfinksy-1.jpg',
        'https://www.royal-canin.ru/bestofpets/upload/resize_cache/iblock/49f/999999_504_1/49ffa24ad8d0738a3adb5caa3091d369.jpg',
        'https://www.my-sfinks.ru/photo/img/sfinksy-kotiata-foto-1.jpg'];
    return view('n1', compact("arr"));
});

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

<?php

use App\Http\Controllers\ComputeresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisController;

Route::get('/',[StatisController::class,'index'] )->name('home.index');
Route::get('/about',[StatisController::class,'about'] )->name('home.about');
Route::get('/contant',[StatisController::class,'contant'] )->name('home.contant');
/* دى عشان لما اكتب اى crud تبان فى اللينك من غير ما احطها*/
Route::resource('computers', ComputeresController::class);
/* اشاره الاستفاهم بتغلى الفايربل عباره عن اوبشن لو مش موجود بتعدى الى بعده وحطيناهم ب فاضى فى الفانكشن عشان لازم ياخد قيمه افترضيه */
Route::get('/store/{category?}/{item?}', function ($category=null,$item=null) {
if(isset($category)){
    if(isset($item)){
        return '<h1>'.$category.' '.$item.'</h1>';    }
    return "<h1>{$category}</h1>";
}
return '<h1>Add Category and Item</h1>';

});







/*
Route::get('/store', function () {
    $filter= request('style');
    if(isset($filter)){
    return 'this page is viewing <span style=" color: red ">'.strip_tags($filter).'</span';}
    return 'this page is viewing <span style=" color: red ">All prodect</span';
});*/

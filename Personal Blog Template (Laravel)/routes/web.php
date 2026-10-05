<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class,'home'])->name("home");
Route::get("about" , [PageController::class,'about'])->name("about");
Route::get("category" , [PageController::class,'category'])->name("category");
Route::get("contact" , [PageController::class,'contact'])->name("contact");


// Blog Posts Navigation Menu Views
Route::view('/blog_posts_full' ,'pages.blog_posts.standard-fullwidth')->name("full");
Route::view('/blog_posts_right' , 'pages.blog_posts.standard-right-sidebar')->name("right");
Route::view('/blog_posts_left' , 'pages.blog_posts.standard-left-sidebar')->name("left");


// Post Format Navigation Menu Views
Route::view('/post_format_video' ,'pages.post_formats.Video')->name("video");
Route::view('/post_format_audio' ,'pages.post_formats.Audio')->name("audio");
Route::view('/post_format_quote' ,'pages.post_formats.Quote')->name("quote");
Route::view('/post_format_gallery' ,'pages.post_formats.Gallery')->name("gallery");
Route::view('/post_format_image' ,'pages.post_formats.Image')->name("image");

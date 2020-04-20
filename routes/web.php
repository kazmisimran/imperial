<?php

use Illuminate\Support\Facades\Route;
use App\Header;
use App\About;
use App\Portfolio;
use App\Team;
use App\Service;
use App\Subscriber;
use App\Testimonial;
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
    $header = Header::find(1);
    $about = About::find(1);
    $portfolios = Portfolio::all();
    $teams = Team::all();

    $services=Service::all();
    $subscriber=Subscriber::find(1);
    $testimonials=Testimonial::all();


    return view('welcome' , compact('header','about','portfolios','teams','services','subscriber','testimonials'));
});

Route::get('/admin', function(){return view ('admin.index');})->name('admin.index');

//Section Header

Route::get('/admin/header', 'HeaderController@edit')->name('header');

Route::put('/admin/header', 'HeaderController@update')->name('header.update');

Route::post('/admin/header', 'HeaderController@create')->name('header.create');


//Section About

Route::get('admin/about' , 'AboutController@edit')-> name('about');

Route::post('admin/about' , 'AboutController@update')->name('about.update');

//Section Portfolio

Route::resource('admin/portfolio' , 'PortfolioController');

//Section Team

Route::resource('admin/team' , 'TeamController');

// // Brahiam 

//Section Service

Route::resource('admin/service' , 'ServiceController');

//Section Subscriber

Route::resource('admin/subscriber' , 'SubscriberController');
Route::post('admin/subscriber/create', "SubscriberController@create")->name('subscriber.create');
Route::post('admin/subscriber/update', "SubscriberController@update")->name('subscriber.update');

//Section Testimonial

Route::resource('testimonial','TestimonialController');

//Section Contact 

Route::resource('contact' , 'ContactController');
Route::post('admin/contact/store', 'ContactController@store')->name('contact.store');





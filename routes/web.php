<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BlogUpdateComponent;
use App\Http\Livewire\BoilerUpdateComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\EventsComponent;
use App\Http\Livewire\FirstHomeComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\OtherBirdPriceUpdateComponent;
use App\Http\Livewire\OurApproachComponent;
use App\Http\Livewire\PriceComponent;
use App\Http\Livewire\PriceTodayComponent;
use App\Http\Livewire\Products\FsmanagerComponent;
use App\Http\Livewire\Products\FsmarketComponent;
use App\Http\Livewire\Products\FsposComponent;
use App\Http\Livewire\Products\SmartPenkeepComponent;
use App\Http\Livewire\PulletsUpdateComponent;
use App\Http\Livewire\TrainingsComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', FirstHomeComponent::class)->name('index');
Route::get('/home', HomeComponent::class)->name('home');
Route::get('/fsmanager', FsmanagerComponent::class)->name('fsmanager');
Route::get('/fsmarket', FsmarketComponent::class)->name('fsmarket');
Route::get('/fspos', FsposComponent::class)->name('fspos');
Route::get('/our-approach', OurApproachComponent::class)->name('our-approach');
Route::get('/smart-penkeep', SmartPenkeepComponent::class)->name('penkeep');
Route::get('/pricing', PriceComponent::class)->name('pricing');
Route::get('/about-us', AboutUsComponent::class)->name('about-us');
Route::get('/trainings', TrainingsComponent::class)->name('trainings');
Route::get('/events', EventsComponent::class)->name('events');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/contact', ContactUsComponent::class)->name('contact');
Route::get('/price-today', PriceTodayComponent::class)->name('price-today');
Route::get('/admin/update-broiler-price-today', BoilerUpdateComponent::class)->name('broiler-price');
Route::get('/admin/update-pullet-price-today', PulletsUpdateComponent::class)->name('pullet-price');
Route::get('/admin/update-bird-price-today', OtherBirdPriceUpdateComponent::class)->name('bird-price');
Route::get('/admin/update-blog', BlogUpdateComponent::class)->name('update-blog');
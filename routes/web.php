<?php

use App\Http\Controllers\MediaController;
use App\Livewire\Categories\CreateCategories;
use App\Livewire\Categories\EditCategories;
use App\Livewire\Pages\CreatePages;
use App\Livewire\Pages\EditPages;
use App\Livewire\Portfolio\CreatePortfolios;
use App\Livewire\Portfolio\EditPortfolios;
use App\Livewire\Services\CreateServices;
use App\Livewire\Services\DetailServices;
use App\Livewire\Services\EditServices;
use App\Livewire\Teams\CreateTeams;
use App\Livewire\Teams\EditTeams;
use App\Livewire\Testimonials\CreateTestimonials;
use App\Livewire\Testimonials\EditTestimonials;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/about-us', 'about-us')->name('about-us');

Route::view('/contact-us', 'contact-us')->name('contact-us');

Route::view('/our-portfolio', 'our-portfolio')->name('our-portfolio');

Route::view('/portfolio-details/{slug}', 'portfolio-details')->name('portfolio-details');

Route::view('/services', 'services')->name('services');

Route::view('/service-details/{slug}', 'service-details')->name('service-details');


Route::group(['prefix' => '/', 'middleware' => ['auth', 'verified']], function () {

    // This route will be used for all model to store media 
    Route::post('model/media', [MediaController::class, 'storeMedia'])->name('model.storeMedia');

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::view('profile', 'profile')->name('profile');


    // Pages
    Route::view('pages', 'pages.index')->name('pages');
    Route::get('/pages/create', CreatePages::class)->name('pages.create');
    Route::get('/pages/{page}/edit', EditPages::class)->name('pages.edit');

    // Inquiries
    Route::view('inquiries', 'inquiries.index')->name('inquiries');
    Route::get('/inquiry/create', CreateCategories::class)->name('inquiries.create');

    //Services 
    Route::view('services', 'services.index')->name('services');
    Route::get('/services/create', CreateServices::class)->name('services.create');
    Route::get('/services/{service}/edit', EditServices::class)->name('services.edit');
   
    //Portfolio-Categories 
    Route::view('categories', 'categories.index')->name('categories');
    Route::get('/category/create', CreateCategories::class)->name('categories.create');
    Route::get('/category/{category}/edit', EditCategories::class)->name('categories.edit');

    // Portfolios
    Route::view('portfolio', 'portfolio.index')->name('portfolio');
    Route::get('/portfolios/create', CreatePortfolios::class)->name('portfolios.create');
    Route::get('/portfolios/{portfolio}/edit', EditPortfolios::class)->name('portfolios.edit');

    //Testimonials 
    Route::view('testimonials', 'testimonials.index')->name('testimonials');
    Route::get('/testimonials/create', CreateTestimonials::class)->name('testimonials.create');
    Route::get('/testimonials/{testimonial}/edit', EditTestimonials::class)->name('testimonials.edit');

    //Teams 
    Route::view('teams', 'teams.index')->name('teams');
    Route::get('/teams/create', CreateTeams::class)->name('teams.create');
    Route::get('/teams/{team}/edit', EditTeams::class)->name('teams.edit');
});

require __DIR__.'/auth.php';

Route::get('/page-not-found', function () {
    return view('404');
})->name('page.not.found');

Route::fallback(function () {
    return redirect()->route('page.not.found');
});

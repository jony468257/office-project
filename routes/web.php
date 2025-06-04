<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\BasicInformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MissionVisionController;
use App\Http\Controllers\OfficerStaffsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
Route::get('/Insurance', [HomeController::class, 'Insurance'])->name('Insurance');
Route::get('/FAQ', [HomeController::class, 'FAQ'])->name('FAQ');
Route::get('/service-detail/{id}', [HomeController::class, 'serviceDetail'])->name('service-detail');
Route::get('/research-detail/{id}', [HomeController::class, 'researchDetail'])->name('research-detail');
Route::post('/registrationStore', [HomeController::class, 'registrationStore'])->name('registrationStore');
Route::post('/form-submit', [HomeController::class, 'store'])->name('form.store');
Route::get('/gallerys', [HomeController::class, 'gallerys'])->name('gallerys');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group( function() {
    Route::get('lang/change/{le}', [LanguageController::class,'change'])->name('changeLang');
    Route::resource('basic-information', BasicInformationController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('about', AboutController::class);
    Route::resource('mission-vision', MissionVisionController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('research', ResearchController::class);
    Route::resource('areas', AreasController::class);
    Route::resource('achievement', AchievementController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('pricing', PricingController::class);
    Route::resource('contact-us', ContactController::class);
    Route::resource('insurance', InsuranceController::class);
    Route::resource('faq', FaqController::class);
    Route::delete('/faq/{id}/{faqIndex}', [FaqController::class, 'destroy'])->name('faq.destroy');
    Route::resource('officers-and-staffs', OfficerStaffsController::class);
    Route::resource('gallery', GalleryController::class);
});

//    Route::resource('academic-calendar', \App\Http\Controllers\AcademiCalendarController::class);
//    Route::resource('class-routine', \App\Http\Controllers\ClassRoutineController::class);
//    Route::resource('admission-circular', \App\Http\Controllers\AdmissionCircularController::class);
//    Route::resource('admission-result', \App\Http\Controllers\AdmissionResultController::class);
//    Route::resource('teachers', \App\Http\Controllers\TeachersController::class);
//    Route::resource('head-sir-message', \App\Http\Controllers\HeadSirMessageController::class);
//    Route::resource('why-study-here', \App\Http\Controllers\WhyStudyHereController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

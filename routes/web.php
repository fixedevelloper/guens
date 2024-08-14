<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::get('language', function () {
    app()->setLocale(request()->get('lang'));
    session()->put('locale', request()->get('lang'));
    return redirect()->back();
})->name('language');
$locale = session()->get('locale', 'en');
Route::match(["POST", "GET"], '/', [HomeController::class, 'home'])
    ->name('home');
//Route::group(['prefix' => $locale],function () {
    Route::match(["POST", "GET"], '/home', [HomeController::class, 'home'])
        ->name('home');
    Route::match(["POST", "GET"], '/about', [HomeController::class, 'about'])
        ->name('about');
    Route::match(["POST", "GET"], '/contact', [HomeController::class, 'contact'])
        ->name('contact');
    Route::match(["POST", "GET"], '/service', [HomeController::class, 'service'])
        ->name('service');
    Route::match(["POST", "GET"], '/representation_rdc', [HomeController::class, 'representation_rdc'])
        ->name('representation_rdc');
    Route::match(["POST", "GET"], '/representation_congo', [HomeController::class, 'representation_congo'])
        ->name('representation_congo');
    Route::match(["POST", "GET"], '/destination', [HomeController::class, 'destination'])
        ->name('destination');
    Route::match(["POST", "GET"], '/partenaire', [HomeController::class, 'partenaire'])
        ->name('partenaire');
    Route::match(["POST", "GET"], '/faq', [HomeController::class, 'faq'])
        ->name('faq');
Route::match(["POST", "GET"], '/formation', [HomeController::class, 'formation'])
    ->name('formation');
Route::match(["POST", "GET"], '/register', [HomeController::class, 'registerFormation'])
    ->name('registerFormation');
Route::match(["POST", "GET"], '/registerNewletter', [HomeController::class, 'registerNewletter'])
    ->name('registerNewletter');

//});
Route::group(['prefix' => 'service'],function () {
    Route::match(["POST", "GET"], '/reservation_billet', [HomeController::class, 'reservation_billet'])
        ->name('reservation_billet');
    Route::match(["POST", "GET"], '/aide_logement', [HomeController::class, 'aide_logement'])
        ->name('aide_logement');
    Route::match(["POST", "GET"], '/coaching', [HomeController::class, 'coaching'])
        ->name('coaching');
    Route::match(["POST", "GET"], '/orientation_academique', [HomeController::class, 'orientation_academique'])
        ->name('orientation_academique');
    Route::match(["POST", "GET"], '/assurance', [HomeController::class, 'assurance'])
        ->name('assurance');
    Route::match(["POST", "GET"], '/procedure_consulaire', [HomeController::class, 'procedure_consulaire'])
        ->name('procedure_consulaire');
});
Route::group(['prefix' => 'gu8951pkgm74congo321admin'],function () {
    Route::match(["POST", "GET"], '/dashboard', [BackendController::class, 'dashboard'])
        ->name('dashboard');
    Route::match(["POST", "GET"], '/contacts', [BackendController::class, 'contacts'])
        ->name('contacts');
    Route::match(["POST", "GET"], '/inscription', [BackendController::class, 'inscription'])
        ->name('inscription');
    Route::match(["POST", "GET"], '/mails', [BackendController::class, 'emails'])
        ->name('mails');
});

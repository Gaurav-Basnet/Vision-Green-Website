<?php

use App\Http\Controllers\annualController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\impactsController;
use App\Http\Controllers\noticeController;
use App\Http\Controllers\privacyController;
use App\Http\Controllers\publicationController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\vacancyController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController; 


use App\Http\Controllers\termsController;
use Illuminate\Support\Facades\Route;


    


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/project',[ProjectController::class,'sendprojects'])->name('projects.send');

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});
Route::get('/notice', function () {
    return view('notice');
});
Route::get('/vacancy', function () {
    return view('vacancy');
});
Route::get('/newsletter', [newsController::class, 'index'])->name('newsletters.index');
Route::get('/newsletters/{id}', [newsController::class, 'show'])->name('newsletters.show');
Route::delete('/newsletters/{id}', [newsController::class, 'destroy'])->name('newsletters.destroy');
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');


Route::get('/impact', function () {
    return view('impact');
});
Route::get('/annual', function () {
    return view('annual');
});
Route::get('/publication', function () {
    return view('publication');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/search', function () {
    return view('search');
});
//backend 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [aboutController::class, 'index'])->name('about');

Route::get('publication', [publicationController::class, 'index'])->name('publication');
Route::get('privacy', [privacyController::class, 'index'])->name('privacy');
Route::get('terms', [termsController::class, 'index'])->name('terms');
Route::get('impact', [impactsController::class, 'index'])->name('impacts');

Route::get('contact', action: [contactController::class, 'index'])->name('contact');

Route::get('vacancy', action: [vacancyController::class, 'index'])->name('vacancy');

Route::get('/sub-welcome', [TeamMemberController::class, 'index'])->name('home');

Route::get('/about/partner', [PartnerController::class, 'index'])->name('about');

Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/login', [LoginController::class, 'login'])->name('login');






Route::middleware(['auth'])->group(function () {


Route::get('/layout', function () {
    return view('Auth.layout');
})->name('layout');


Route::get('/reportuploading', function () {
    return view('Auth.reportuploading');
})->name('reportuploading');


Route::get('/homeuploading', [homeController::class,'fetchhome'])->name('homd.get');
Route::post('/hom-sections/update', [homeController::class, 'update'])->name('hom-sections.update');

Route::get('/aboutuploading', [aboutController::class,'fetchhome'])->name('about.get');
Route::post('/about-sections/update', [aboutController::class, 'update'])->name('about-sections.update');

Route::get('/publicationuploading',[publicationController::class,'fetchhome'])->name('publication-sections.get');
Route::post('/publication-sections/update', [publicationController::class, 'update'])->name('publication-sections.update');

Route::get('/newsuploading',[newsController::class,'fetchhome'])->name('news-sections.get');
Route::post('/news-sections/update', [newsController::class, 'update'])->name('news-sections.update');

Route::get('/privacyuploading',[privacyController::class,'fetchhome'])->name('privacy-sections.get');
Route::post('/privacy-sections/update', [privacyController::class, 'update'])->name('privacy-sections.update');

Route::get('/termsuploading',[termsController::class,'fetchhome'])->name('terms-uploading.get');
Route::post('/termsuploading/update', [termsController::class, 'update'])->name('terms-uploading.update');


Route::get('/impactsuploading',[impactsController::class,'fetchhome'])->name('impacts-uploading.get');
Route::post('/impactsuploading/update', [impactsController::class, 'update'])->name('impacts-uploading.update');

Route::get('/annualuploading',[annualController::class,'fetchhome'])->name('annuals-uploading.get');
Route::post('/annualuploading/update', [annualController::class, 'update'])->name('annuals-uploading.update');

Route::get('/contactuploading',[contactController::class,'fetchhome'])->name('contact-uploading.get');
Route::post('/contactuploading/update', [contactController::class, 'update'])->name('contact-uploading.update');

Route::get('/vacancy-sections', [VacancyController::class, 'fetchhome'])->name('vacancy-sections.index');
Route::post('/vacancy-sections/update', [VacancyController::class, 'update'])->name('vacancy-sections.update');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team.index');
Route::post('/team', [TeamMemberController::class, 'store'])->name('team.store');
Route::put('/team-management/{member}', [TeamMemberController::class, 'update'])->name('team.update');
Route::delete('/team-management/{member}', [TeamMemberController::class, 'destroy'])->name('team.destroy');


// Show partner management page
Route::get('/partneruploading', [PartnerController::class, 'index'])->name('partners.index');
// Add new partner
Route::post('/partneruploading', [PartnerController::class, 'store'])->name('partners.store');
// Delete partner
Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');

// Show project management page
Route::get('/projectuploading', [ProjectController::class, 'show'])->name('projects.show');
// Add new project
Route::post('/projectposting', [ProjectController::class, 'store'])->name('projects.store');  
// Delete project
Route::delete('/projects/{id}',  [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/newsletteruploading',[newsController::class,'createview'])->name('news.send');

Route::post('/newspdf',[newsController::class,'store'])->name('newsletters.store');
Route::delete('/newsletters/{id}', [newsController::class, 'destroy'])->name('newsletters.destroy');


Route::post('/noticeupload',[noticeController::class,'store'])->name('notice.store');

Route::get('noticeuploading',[noticeController::class,'adminshow'])->name('notices.get');
});



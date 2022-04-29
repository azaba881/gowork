<?php

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

Route::get('/', function () { return view('welcome');})->name('hme');
Route::get('/404', function () { return view('404');})->name('404');
Route::get('/blog', [App\Http\Controllers\GlobalController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\GlobalController::class, 'contact'])->name('contact');

Auth::routes(); 

//profil demandeur d'emploi
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/candidature', [App\Http\Controllers\HomeController::class, 'candidature'])->name('candidature');
Route::get('/abonnement', [App\Http\Controllers\HomeController::class, 'abonnement'])->name('abonnement');
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');


//Administrateur
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/externe', [App\Http\Controllers\ExterneController::class, 'index'])->name('externe');
Route::post('/externe', [App\Http\Controllers\ExterneController::class, 'store'])->name('externestore');
Route::get('/admina', [App\Http\Controllers\AdminController::class, 'entreprise'])->name('adminentreprise');
Route::get('/adminb', [App\Http\Controllers\AdminController::class, 'travailleur'])->name('admintravailleur');


//profil travailleur ou candidat
Route::get('/travailleur', [App\Http\Controllers\TravailleurController::class, 'index'])->name('travailleurcreate');
Route::post('/travailleur', [App\Http\Controllers\TravailleurController::class, 'store'])->name('travailleurstore');


// profil entreprise 
Route::get('/entreprise', [App\Http\Controllers\HomeController::class, 'entreprise'])->name('entreprise');
Route::get('/entrepriseabonnement', [App\Http\Controllers\HomeController::class, 'entrepriseabonnement'])->name('entrepriseabonnement');
Route::get('/abonnement/{id}', [App\Http\Controllers\HomeController::class, 'standard'])->name('standard');
Route::get('/entreprisecandidature', [App\Http\Controllers\HomeController::class, 'entreprisecandidature'])->name('entreprisecandidature');
Route::get('/evaluation', [App\Http\Controllers\HomeController::class, 'evaluation'])->name('evaluation');
Route::get('/entrepriseprofil', [App\Http\Controllers\HomeController::class, 'entrepriseprofil'])->name('entrepriseprofil');
Route::get('/entreprisecreate', [App\Http\Controllers\EntrepriseController::class, 'index'])->name('entreprisecreate');
Route::post('/entreprise', [App\Http\Controllers\EntrepriseController::class, 'store'])->name('entreprisestore');


// job control
Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('creerjob');
Route::post('/job', [App\Http\Controllers\JobController::class, 'store'])->name('storejob');
Route::get('/job/{id}', [App\Http\Controllers\JobController::class, 'jobexpire'])->name('jobexpire');
Route::get('/jobrelance/{id}', [App\Http\Controllers\JobController::class, 'jobrelance'])->name('jobrelance');


//demandeur
Route::get('/demandeur', [App\Http\Controllers\EntrepriseController::class, 'demandeur'])->name('demandeur');
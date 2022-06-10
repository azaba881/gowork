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
Route::post('/candidaturestore/{id}', [App\Http\Controllers\CandidatureController::class, 'show'])->name('candidaturestore');

Route::get('/abonnement', [App\Http\Controllers\HomeController::class, 'abonnement'])->name('abonnement');
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');


//Administrateur
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/externes', [App\Http\Controllers\ExterneController::class, 'index'])->name('externe');
Route::post('/externes', [App\Http\Controllers\ExterneController::class, 'store'])->name('externestore');
Route::get('/admina', [App\Http\Controllers\AdminController::class, 'entreprise'])->name('adminentreprise');
Route::get('/adminb', [App\Http\Controllers\AdminController::class, 'travailleur'])->name('admintravailleur');


//profil travailleur ou candidat 
Route::get('/travailleur', [App\Http\Controllers\TravailleurController::class, 'index'])->name('travailleurcreate');
Route::post('/travailleur', [App\Http\Controllers\TravailleurController::class, 'store'])->name('travailleurstore');
Route::get('/externea', [App\Http\Controllers\HomeController::class, 'travailleurexterne'])->name('travailleurexterne');
Route::get('/cv', [App\Http\Controllers\TravailleurController::class, 'cv'])->name('cv');

 //Documents du candidat 
Route::get('/documents', [App\Http\Controllers\DocumentController::class, 'document'])->name('documents');
Route::get('/diplomes', [App\Http\Controllers\DocumentController::class, 'diplome'])->name('diplomes');
Route::get('/cvs', [App\Http\Controllers\DocumentController::class, 'cv'])->name('cvs');
Route::post('/cvs', [App\Http\Controllers\ResumeController::class, 'store'])->name('cvsstore');

Route::get('/certifications', [App\Http\Controllers\DocumentController::class, 'certification'])->name('certifications');
Route::post('/certifications', [App\Http\Controllers\CertificationController::class, 'store'])->name('certificationstore');

Route::get('/attestations', [App\Http\Controllers\DocumentController::class, 'attestation'])->name('attestations');
Route::post('/attestations', [App\Http\Controllers\AttestationController::class, 'store'])->name('attestationstore');

Route::get('/bac', [App\Http\Controllers\DocumentController::class, 'bac'])->name('bac');
Route::post('/bac', [App\Http\Controllers\BacController::class, 'store'])->name('bacstore');

Route::get('/license', [App\Http\Controllers\DocumentController::class, 'license'])->name('license');
Route::post('/license', [App\Http\Controllers\LicenseController::class, 'store'])->name('licensestore');

Route::get('/master', [App\Http\Controllers\DocumentController::class, 'master'])->name('master');
Route::post('/master', [App\Http\Controllers\MasterController::class, 'store'])->name('masterstore');

Route::get('/doctorat', [App\Http\Controllers\DocumentController::class, 'doctorat'])->name('doctorat');
Route::post('/doctorat', [App\Http\Controllers\DoctoratController::class, 'store'])->name('doctoratstore');

 
//cv
Route::post('/skills', [App\Http\Controllers\SkillController::class, 'store'])->name('skill');
Route::post('/experience', [App\Http\Controllers\ExperienceController::class, 'store'])->name('experience');
Route::post('/etude', [App\Http\Controllers\EtudeController::class, 'store'])->name('etude');
//Route::post('/bio', [App\Http\Controllers\BioController::class, 'store'])->name('bio');
Route::put('/bio', [App\Http\Controllers\BioController::class, 'update'])->name('bioupdate');


// profil entreprise 
Route::get('/entreprise', [App\Http\Controllers\HomeController::class, 'entreprise'])->name('entreprise');
Route::get('/entrepriseabonnement', [App\Http\Controllers\HomeController::class, 'entrepriseabonnement'])->name('entrepriseabonnement');
//abonnement
Route::get('/abonnement/{id}', [App\Http\Controllers\HomeController::class, 'standard'])->name('standard');
Route::get('/base/{id}', [App\Http\Controllers\HomeController::class, 'base'])->name('base');
Route::get('/premium/{id}', [App\Http\Controllers\HomeController::class, 'premium'])->name('premium');
//others
Route::get('/entreprisecandidature', [App\Http\Controllers\HomeController::class, 'entreprisecandidature'])->name('entreprisecandidature');
Route::get('/evaluation', [App\Http\Controllers\HomeController::class, 'evaluation'])->name('evaluation');
Route::get('/entrepriseprofil', [App\Http\Controllers\HomeController::class, 'entrepriseprofil'])->name('entrepriseprofil');
Route::get('/entreprisecreate', [App\Http\Controllers\EntrepriseController::class, 'index'])->name('entreprisecreate');
Route::post('/entreprise', [App\Http\Controllers\EntrepriseController::class, 'store'])->name('entreprisestore');

//search
Route::post('/searchjob', [App\Http\Controllers\SearchjobController::class, 'store'])->name('searchjob');

// job control
Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('creerjob');
Route::post('/job', [App\Http\Controllers\JobController::class, 'store'])->name('storejob');
Route::get('/job/{id}', [App\Http\Controllers\JobController::class, 'jobexpire'])->name('jobexpire');
Route::get('/jobrelance/{id}', [App\Http\Controllers\JobController::class, 'jobrelance'])->name('jobrelance');
Route::get('/jobdetail/{id}', [App\Http\Controllers\JobController::class, 'jobdetail'])->name('jobdetail');
//Route::get('/jobdetail', [App\Http\Controllers\JobController::class, 'jobdetails']);


//demandeur
Route::get('/demandeur', [App\Http\Controllers\EntrepriseController::class, 'demandeur'])->name('demandeur');
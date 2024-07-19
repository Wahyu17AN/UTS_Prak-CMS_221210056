<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\Public\ProfileController;
use App\Http\Controllers\Public\PublicHomeController;
use App\Http\Controllers\Public\ProjectController;
use App\Http\Controllers\Public\ContactController;

use App\Http\Controllers\Private\FooterController;
use App\Http\Controllers\Private\HomeController;
use App\Http\Controllers\Private\ExperienceController;
use App\Http\Controllers\Private\EducationController;
use App\Http\Controllers\Private\SkillsController;
use App\Http\Controllers\Private\LanguagesController;
use App\Http\Controllers\Private\TextProfileController;
use App\Http\Controllers\Private\TitleProjectController;
use App\Http\Controllers\Private\TitleFooterController;
use App\Http\Controllers\Private\AdminProjectController;
use App\Http\Controllers\Private\ViewMessageController;
use App\Http\Controllers\Private\SocialMediaController;
use App\Http\Controllers\Private\NavbarController;
use App\Http\Controllers\Private\TitleContactController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/layouts.public.home');
})->name('home_public');

Route::get('/',[PublicHomeController::class, 'index'])->name('home_public');
Route::get('/profile_public', [ProfileController::class, 'index'])->name('profile_public');
Route::get('/project_public', [ProjectController::class, 'index'])->name('project_public');
Route::get('/contact_public', [ContactController::class,'index'])->name('contact_public');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin', function () {
    return view('layouts.auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {return view('dashboard');
    })->name('dashboard');
    Route::get('/admin/profile', [AuthController::class, 'profile'])->name('profile');

    Route::controller(FooterController::class)->prefix('footers.index')->group(function () {
        Route::get('/admin/footers', 'index')->name('footers.index');
        Route::get('/admin/footers/create', 'create')->name('footers.create');
        Route::post('/admin/footers/store', 'store')->name('footers.store');
        Route::get('/admin/footers/{footer}/edit', 'edit')->name('footers.edit');
        Route::put('/admin/footers/{footer}/edit', 'update')->name('footers.update');
        Route::delete('/admin/footers/{footer}/destroy', 'destroy')->name('footers.destroy');
    });

    Route::controller(NavbarController::class)->prefix('navbar.index')->group(function () {
        Route::get('/admin/navbar', 'index')->name('navbar.index');
        Route::get('/admin/navbar/create', 'create')->name('navbar.create');
        Route::post('/admin/navbar/store', 'store')->name('navbar.store');
        Route::get('/admin/navbar/{navbar}/edit', 'edit')->name('navbar.edit');
        Route::put('/admin/navbar//{navbar}/edit', 'update')->name('navbar.update');
        Route::delete('/admin/navbar/{navbar}/destroy', 'destroy')->name('navbar.destroy');
    });

    Route::controller(SocialMediaController::class)->prefix('social_media.index')->group(function () {
        Route::get('/admin/social_media', 'index')->name('social_media.index');
        Route::get('/admin/social_media/create', 'create')->name('social_media.create');
        Route::post('/admin/social_media/store','store')->name('social_media.store');
        Route::get('/admin/social_media/{socialMedia}/edit','edit')->name('social_media.edit');
        Route::put('/admin/social_media/{socialMedia}','update')->name('social_media.update');
        Route::delete('.admin/social_media/{socialMedia}','destroy')->name('social_media.destroy');
    });

    Route::controller(HomeController::class)->prefix('home.index')->group(function () {
        Route::get('/admin/home', 'index')->name('home.index');
        Route::get('/admin/home/create', 'create')->name('home.create');
        Route::post('/admin/home/store','store')->name('home.store');
        Route::get('/admin/home/{home}/edit','edit')->name('home.edit');
        Route::put('/admin/home/{home}/update','update')->name('home.update');
        Route::delete('/admin/home/{home}/delete','destroy')->name('home.destroy');
    });

    Route::controller(ExperienceController::class)->prefix('experiences')->group(function () {
        Route::get('/admin/experiences', 'index')->name('experiences');
        Route::get('/admin/experiences/create', 'create')->name('experiences.create');
        Route::post('/admin/experiences/store', 'store')->name('experiences.store');
        Route::get('/admin/experiences/edit/{id}', 'edit')->name('experiences.edit');
        Route::put('/admin/experiences/edit/{id}', 'update')->name('experiences.update');
        Route::delete('/admin/experiences/destroy/{id}', 'destroy')->name('experiences.destroy');
    });

    Route::controller(EducationController::class)->prefix('education')->group(function () {
        Route::get('/admin/education', 'index')->name('education');
        Route::get('/admin/education/create', 'create')->name('education.create');
        Route::post('/admin/education/store', 'store')->name('education.store');
        Route::get('/admin/education/edit/{id}', 'edit')->name('education.edit');
        Route::put('/admin/education/edit/{id}', 'update')->name('education.update');
        Route::delete('/admin/education/destroy/{id}', 'destroy')->name('education.destroy');
    });

    Route::controller(SkillsController::class)->prefix('skills')->group(function () {
        Route::get('/admin/skills', 'index')->name('skills');
        Route::get('/admin/skills/create', 'create')->name('skills.create');
        Route::post('/admin/skills/store', 'store')->name('skills.store');
        Route::get('/admin/skills/edit/{id}', 'edit')->name('skills.edit');
        Route::put('/admin/skills/edit/{id}', 'update')->name('skills.update');
        Route::delete('/admin/skills/destroy/{id}', 'destroy')->name('skills.destroy');
    });

    Route::controller(LanguagesController::class)->prefix('languages')->group(function () {
        Route::get('/admin/languages', 'index')->name('languages');
        Route::get('/admin/languages/create', 'create')->name('languages.create');
        Route::post('/admin/languages/store', 'store')->name('languages.store');
        Route::get('/admin/languages/edit/{id}', 'edit')->name('languages.edit');
        Route::put('/admin/languages/edit/{id}', 'update')->name('languages.update');
        Route::delete('/admin/languages/destroy/{id}', 'destroy')->name('languages.destroy');
    });

    Route::controller(TextProfileController::class)->prefix('text_profiles.index')->group(function () {
        Route::get('/admin/text_profiles', 'index')->name('text_profiles.index');
        Route::get('/admin/text_profiles/create', 'create')->name('text_profiles.create');
        Route::post('/admin/text_profiles/store', 'store')->name('text_profiles.store');
        Route::get('/admin/text_profiles/edit/{id}', 'edit')->name('text_profiles.edit');
        Route::put('/admin/text_profiles/update/{id}', 'update')->name('text_profiles.update');
        Route::delete('/admin/text_profiles/destroy/{id}', 'destroy')->name('text_profiles.destroy');
    });

    Route::controller(TitleProjectController::class)->prefix('title_project')->group(function () {
        Route::get('/admin/title_project', 'index')->name('title_project');
        Route::get('/admin/title_project/create', 'create')->name('title_project.create');
        Route::post('/admin/title_project/store', 'store')->name('title_project.store');
        Route::get('/admin/title_project/edit/{id}', 'edit')->name('title_project.edit');
        Route::put('/admin/title_project/edit/{id}', 'update')->name('title_project.update');
        Route::delete('/admin/title_project/destroy/{id}', 'destroy')->name('title_project.destroy');
    });

    Route::controller(TitleContactController::class)->prefix('title_contact')->group(function () {
        Route::get('/admin/title_contact', 'index')->name('title_contact');
        Route::get('/admin/title_contact/create', 'create')->name('title_contact.create');
        Route::post('/admin/title_contact/store', 'store')->name('title_contact.store');
        Route::get('/admin/title_contact/edit/{id}', 'edit')->name('title_contact.edit');
        Route::put('/admin/title_contact/edit/{id}', 'update')->name('title_contact.update');
        Route::delete('/admin/title_contact/destroy/{id}', 'destroy')->name('title_contact.destroy');
    });

    Route::controller(TitleFooterController::class)->prefix('title_footer')->group(function () {
        Route::get('/admin/title_footer', 'index')->name('title_footer');
        Route::get('/admin/title_footer/create', 'create')->name('title_footer.create');
        Route::post('/admin/title_footer/store', 'store')->name('title_footer.store');
        Route::get('/admin/title_footer/edit/{id}', 'edit')->name('title_footer.edit');
        Route::put('/admin/title_footer/edit/{id}', 'update')->name('title_footer.update');
        Route::delete('/admin/title_footer/destroy/{id}', 'destroy')->name('title_footer.destroy');
    });

    Route::controller(AdminProjectController::class)->prefix('project.index')->group(function () {
        Route::get('/admin/project', 'index')->name('project.index');
        Route::get('/admin/project/create', 'create')->name('project.create');
        Route::post('/admin/project/store', 'store')->name('project.store');
        Route::get('/admin/project/edit/{project}', 'edit')->name('project.edit');
        Route::put('/admin/project/update/{project}', 'update')->name('project.update');
        Route::delete('/admin/project/destroy/{project}', 'destroy')->name('project.destroy');
    });

    Route::controller(ViewMessageController::class)->prefix('contacts.index')->group(function () {
        Route::get('/admin/contacts', 'index')->name('contacts.index');
        Route::get('/admin/contacts/{id}', 'show')->name('contacts.show');
        Route::delete('/admin/contacts/{id}','destroy')->name('contacts.destroy');
    });
});

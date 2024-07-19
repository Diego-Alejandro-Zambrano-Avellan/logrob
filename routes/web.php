<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/posts/create', \App\Livewire\Posts\Create::class)->name('posts.create');
Route::get('/posts/show/{post}', \App\Livewire\Posts\Show::class)->name('posts.show');
Route::get('/posts/update/{post}', \App\Livewire\Posts\Edit::class)->name('posts.edit');


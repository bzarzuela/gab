<?php

use App\Livewire\TwoLetters;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/two-letters');
Route::get('/two-letters', TwoLetters::class);

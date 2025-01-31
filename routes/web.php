<?php

use App\Livewire\ThreeLetters;
use App\Livewire\TwoLetters;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/two-letters', TwoLetters::class);
Route::get('/three-letters', ThreeLetters::class);
Route::get('/three-letters/answer', ThreeLetters\Answer::class);

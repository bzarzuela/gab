<?php

namespace App\Livewire\ThreeLetters;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Answer extends Component
{
    public function render(): View
    {
        return view('livewire.three-letters.answer')
            ->with('choices', Cache::get('three-letters.choices'))
            ->with('answer', Cache::get('three-letters.answer'));
    }
}

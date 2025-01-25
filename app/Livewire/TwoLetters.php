<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TwoLetters extends Component
{
    public array $consonants = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'];

    public array $vowels = ['A', 'E', 'I', 'O', 'U'];

    public string $consonant = '';
    public string $vowel = '';

    public function mount(): void
    {
        $this->randomize();
    }

    public function render(): View
    {
        return view('livewire.two-letters')
            ->title('Two Letters');
    }

    public function randomize(): void
    {
        $this->consonant = $this->consonants[array_rand($this->consonants)];
        $this->vowel = $this->vowels[array_rand($this->vowels)];
    }
}

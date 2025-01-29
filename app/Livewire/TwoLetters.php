<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TwoLetters extends Component
{
    public array $consonants = [];
    public array $vowels = [];

    public string $consonant = '';
    public string $vowel = '';

    public bool $allConsonants = true;
    public bool $allVowels = true;

    protected array $master = [
        'consonants' => ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'],
        'vowels' => ['A', 'E', 'I', 'O', 'U'],
    ];

    public function mount(): void
    {
        $this->consonants = $this->master['consonants'];
        $this->vowels = $this->master['vowels'];
    }

    public function updatedAllConsonants($value): void
    {
        $this->consonants = $value ? $this->master['consonants'] : [];
    }

    public function updatedAllVowels($value): void
    {
        $this->vowels = $value ? $this->master['vowels'] : [];
    }

    public function render(): View
    {
        return view('livewire.two-letters')
            ->title('Two Letters')
            ->with('master', $this->master);
    }
}

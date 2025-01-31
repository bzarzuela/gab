<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ThreeLetters extends Component
{
    protected array $base = [
        'cat',
        'dog',
        'bed',
        'pig',
        'run',
        'hat',
        'sun',
        'fox',
        'net',
        'mop',
        'bat',
        'cap',
        'pen',
        'tap',
        'cub',
        'log',
        'kid',
        'mat',
        'lip',
        'ram',
        'red',
        'fin',
        'rod',
        'jam',
        'bus',
        'hen',
        'hut',
        'box',
        'yak',
        'zip',
        'fig',
        'bug',
        'kit',
        'bin',
        'map',
        'van',
        'win',
        'pop',
        'wet',
        'rib',
        'cop',
        'rag',
        'mud',
        'bid',
        'pod',
        'den',
        'dug',
        'pan',
        'sip',
        'lap',
        'pet',
        'lot',
        'nab',
        'sob',
        'jug',
        'wig',
        'dab',
        'rip',
        'vet',
        'yam',
    ];

    public Collection $choices;

    public string $answer;

    public string $guess = '';

    public function mount(): void
    {
        $this->initQuestion();
    }

    public function yo(string $guess): void
    {
        $this->guess = $guess;
    }

    protected function buttonVariant(string $choice): string
    {
        if ($this->guess !== '' && $this->guess === $choice) {
            return 'primary';
        }

        return 'outline';
    }

    public function initQuestion(): void
    {
        $this->choices = collect($this->base)->random(3);
        $this->answer = $this->choices->random(1)->first();

        Cache::put('three-letters.answer', $this->answer);
        Cache::put('three-letters.choices', $this->choices->toArray());
    }

    public function render(): View
    {
        return view('livewire.three-letters')
            ->title('Three Letters');
    }
}

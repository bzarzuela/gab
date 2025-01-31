<div class="min-h-screen w-full flex flex-col items-center justify-center gap-6">
    <div class="grid grid-cols-1 gap-6">
        @foreach($choices as $choice)
            <flux:button
                wire:click="yo('{{ $choice }}')"
                variant="{{ $this->buttonVariant($choice) }}"
                @class([
                    '!text-6xl !p-6 h-auto',
                    'bg-green-500' => $answer === $guess,
                    'bg-red-500' => $answer !== $guess
                ])
            >{{ $choice }}</flux:button>
        @endforeach
    </div>

    <div class="justify-center">
        <flux:button href="/three-letters" icon="arrow-path">Reload</flux:button>
    </div>
</div>

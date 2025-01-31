<div class="min-h-screen w-full flex flex-col items-center justify-center gap-6">
    <div class="grid grid-cols-1 gap-6">
        @foreach($choices as $choice)
            <flux:button :icon="$choice === $answer ? 'check' : 'x-mark'">{{ $choice }}</flux:button>
        @endforeach
    </div>

    <div class="justify-center">
        <flux:button href="/three-letters/answer" icon="arrow-path">Reload</flux:button>
    </div>
</div>

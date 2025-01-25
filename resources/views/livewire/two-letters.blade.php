<div class="">

    <flux:modal.trigger name="options">
        <flux:button icon="cog" class="absolute top-6 left-6" />
    </flux:modal.trigger>

    <h1 class="text-9xl w-full min-h-screen flex justify-center items-center cursor-pointer" wire:click="randomize">
        {{ strtolower($consonant) }}{{ strtolower($vowel) }}
    </h1>

    <flux:modal name="options" variant="flyout">
        <div class="grid grid-cols-2 gap-6">
            <flux:checkbox.group wire:model="consonants">
                @foreach (['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'] as $consonant)
                    <flux:checkbox value="{{ $consonant }}" label="{{ $consonant }}" />
                @endforeach
            </flux:checkbox.group>

            <flux:checkbox.group wire:model="vowels">
                @foreach (['A', 'E', 'I', 'O', 'U'] as $vowel)
                    <flux:checkbox value="{{ $vowel }}" label="{{ $vowel }}" />
                @endforeach
            </flux:checkbox.group>
        </div>
    </flux:modal>

</div>

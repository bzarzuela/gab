<div x-data="TwoLetter">

    <flux:modal.trigger name="options">
        <flux:button icon="cog" class="absolute top-6 left-6" />
    </flux:modal.trigger>

    <h1 x-text="word"
        x-on:click="randomize()"
        class="text-9xl w-full min-h-screen flex justify-center items-center cursor-pointer select-none" ></h1>

    <flux:modal name="options" variant="flyout">
        <div class="grid grid-cols-2 gap-6">
            <div class="space-y-3">
                <flux:checkbox wire:model.live="allConsonants" label="All"/>
                <flux:checkbox.group wire:model="consonants">
                    @foreach ($master['consonants'] as $consonant)
                        <flux:checkbox value="{{ $consonant }}" label="{{ $consonant }}" />
                    @endforeach
                </flux:checkbox.group>
            </div>

            <div class="space-y-3">
                <flux:checkbox wire:model.live="allVowels" label="All"/>
                <flux:checkbox.group wire:model="vowels">
                    @foreach ($master['vowels'] as $vowel)
                        <flux:checkbox value="{{ $vowel }}" label="{{ $vowel }}" />
                    @endforeach
                </flux:checkbox.group>
            </div>
        </div>
    </flux:modal>

</div>

@script
<script>
    Alpine.data('TwoLetter', () => ({
        word: '',

        init() {
            this.randomize();
        },

        randomize() {
            this.word = this.$wire.consonants[Math.floor(Math.random() * this.$wire.consonants.length)];
            this.word += this.$wire.vowels[Math.floor(Math.random() * this.$wire.vowels.length)];
            this.word = this.word.toLowerCase();
        }
    }));
</script>
@endscript

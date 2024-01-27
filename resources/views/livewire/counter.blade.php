<div >
    {{-- The Master doesn't talk, he acts. --}}
    <button wire:click="decrement" style="border:1px solid #000; padding: .5rem 1.5rem;">mines</button>
    <button wire:click="increment" style="border:1px solid #000; padding: .5rem 1.5rem;">add</button>
    <h1>{{ 'Count: ' . $count  }}</h1>
</div>

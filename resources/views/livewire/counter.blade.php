<div>
    <h1>{{ $count }}</h1>
    <input type="number" wire:model.blur='number' />
    <button wire:click="changeCount({{ $number }})">Change count</button>
</div>

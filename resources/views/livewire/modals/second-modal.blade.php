<x-modal-wrapper wire:model="visible">
    <div>Second modal</div>

    <div>
        {{ $counter }}
        <button wire:click="increment">Increment</button>
    </div>

    <button wire:click="dispatchTo('modals.first-modal', 'show')">Open first modal</button>
</x-modal-wrapper>

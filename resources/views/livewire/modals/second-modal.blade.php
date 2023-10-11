<x-modal-wrapper wire:model="visible">
    Second modal

    <button wire:click="dispatchTo('modals.first-modal', 'show')">Open first modal</button>
</x-modal-wrapper>

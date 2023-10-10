<x-modal-wrapper wire:model="visible">
    <div>Modal content</div>
    <div>
        <button wire:click="dispatchTo('modals.second-modal', 'show')">Open second modal</button>
    </div>
</x-modal-wrapper>

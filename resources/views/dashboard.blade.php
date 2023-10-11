<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <button x-data x-on:click="Livewire.dispatchTo(null, 'modals.first-modal', 'show')">Open first modal</button>
                    </div>
                    <div>
                        <button x-data x-on:click="Livewire.dispatchTo(null, 'modals.second-modal', 'show')">Open second modal</button>
                    </div>
                    <div>
                        <button x-data x-on:click="$modal('modals.first-modal')">Open first modal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

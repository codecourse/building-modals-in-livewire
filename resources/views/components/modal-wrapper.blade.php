<div
    class="relative z-10"
    x-data="{ visible: @entangle($attributes->wire('model')), now: null }"
    x-show="visible"
    x-trap.inert.noscroll="visible"
    x-on:keydown.escape.window="Livewire.dispatchTo(null, '{{ $this->getName() }}', 'hide')"
    x-init="
        $watch('visible', (value) => {
            now = Math.ceil(performance.now() / 1000)
        })
    "
    :style="`z-index: ${now}`"
>
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" x-on:click="Livewire.dispatchTo(null, '{{ $this->getName() }}', 'hide')"></div>

            <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                <div>
                    {{ $slot }}

                    <button x-on:click="visible = false">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm'

Alpine.magic('modal', () => {
    return (name) => {
        Livewire.dispatchTo(null, name, 'show')
    }
})

Livewire.start()

<?php

namespace App\Livewire\Modals;

use App\Livewire\Traits\IsModal;
use Livewire\Attributes\On;
use Livewire\Component;

class SecondModal extends Component
{
    use IsModal;

    public $counter = 0;

    #[On('hidden')]
    public function cleanup()
    {
        $this->counter = 0;
    }

    public function increment()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.modals.second-modal');
    }
}

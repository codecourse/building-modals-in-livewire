<?php

namespace App\Livewire\Modals;

use App\Livewire\Traits\IsModal;
use Livewire\Component;

class FirstModal extends Component
{
    use IsModal;

    public $counter = 0;

    public function increment()
    {
        $this->counter++;

        if ($this->counter === 10) {
            $this->dispatch('hide')->self();
        }
    }

    public function render()
    {
        return view('livewire.modals.first-modal');
    }
}

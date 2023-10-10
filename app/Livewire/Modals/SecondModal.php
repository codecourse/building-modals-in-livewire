<?php

namespace App\Livewire\Modals;

use App\Livewire\Traits\IsModal;
use Livewire\Component;

class SecondModal extends Component
{
    use IsModal;

    public function render()
    {
        return view('livewire.modals.second-modal');
    }
}

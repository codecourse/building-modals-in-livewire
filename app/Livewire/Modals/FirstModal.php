<?php

namespace App\Livewire\Modals;

use Livewire\Attributes\On;
use Livewire\Component;

class FirstModal extends Component
{
    public $visible = false;

    #[On('show')]
    public function show()
    {
        $this->visible = true;
    }

    #[On('hide')]
    public function hide()
    {
        $this->visible = false;
    }

    public function render()
    {
        return view('livewire.modals.first-modal');
    }
}

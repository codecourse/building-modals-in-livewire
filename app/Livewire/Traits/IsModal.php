<?php

namespace App\Livewire\Traits;

use Livewire\Attributes\On;

trait IsModal
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
}

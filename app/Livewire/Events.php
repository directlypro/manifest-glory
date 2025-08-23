<?php

namespace App\Livewire;

use Livewire\Component;

class Events extends Component
{
    public $showEventPopup = true;

    public function closePopup()
    {
        $this->showEventPopup = false;
    }

    public function render()
    {
        return view('livewire.events');
    }
}

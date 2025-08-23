<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Events extends Component
{
    public $showEventPopup = true;
    public $eventDate = '2025-09-07'; // Configure your event date here

    public function mount()
    {
        // Check if the event date has passed
        $this->showEventPopup = Carbon::parse($this->eventDate)->isFuture();
    }

    public function closePopup()
    {
        $this->showEventPopup = false;
    }

    public function render()
    {
        return view('livewire.events');
    }
}

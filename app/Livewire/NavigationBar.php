<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class NavigationBar extends Component
{
    public $showEventPopup = false;
    public $eventDate = '2025-09-07'; // Configure your event date here, pull date from config or database as needed

    public function mount()
    {
    // Determine whether the event is in the future. If it is, allow the popup to be shown.
    // If the event date has passed, keep the popup hidden.
    $this->showEventPopup = Carbon::parse($this->eventDate)->isFuture();
    }

    public function closePopup()
    {
        $this->showEventPopup = false;
    }
    public function render()
    {
        return view('livewire.navigation-bar');
    }
}

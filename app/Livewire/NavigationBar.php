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
        // Check if the event date has passed
        $shouldShow = Carbon::parse($this->eventDate)->isFuture();

        // Initial state is false, will be set to true by JavaScript after delay if conditions are met
        $this->showEventPopup = false;
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

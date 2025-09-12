<?php

namespace App\Livewire;

use Livewire\Component;
class HomePage extends Component
{
    public $showModal = false;

    protected $listeners = ['keydown.escape' => 'closeModal'];

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}

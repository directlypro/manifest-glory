<?php

namespace App\Livewire;

use Livewire\Component;

class TestPage extends Component
{
    public $showModal = false;

    public function render()
    {
        $items = [
            ['id' => 1, 'name' => 'Item A'],
            ['id' => 2, 'name' => 'Item B'],
            ['id' => 3, 'name' => 'Item C'],
        ];

        return view('livewire.test-page');
    }

    public function toggleModal() {
        $this->showModal = ! $this->showModal;
    }
}

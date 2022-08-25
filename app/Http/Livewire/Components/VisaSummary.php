<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class VisaSummary extends Component
{

    public $visas=[];

    public function mount($visas)
    {
        $this->visas = $visas;
    }

    public function render()
    {
        return view('livewire.components.visa-summary');
    }
}

<?php

namespace App\Http\Livewire\Components;

use App\Models\VisaCost as ModelsVisaCost;
use Livewire\Component;

class VisaCost extends Component
{

    public $visa_id;

    public function mount($visa_id)
    {
        $this->visa_id = $visa_id;
    }

    public function render()
    {
        $result = ModelsVisaCost::where('project_item_visa_id', $this->visa_id)
                        ->with('visa')
                    ->get();
        return view('livewire.components.visa-cost', ['visa_costs' => $result]);
    }
}

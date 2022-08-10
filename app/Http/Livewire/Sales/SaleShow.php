<?php

namespace App\Http\Livewire\Sales;

use App\Models\Sale;
use Livewire\Component;

class SaleShow extends Component
{

    public $visa_id;

    public function mount($visa_id)
    {
        $this->visa_id = $visa_id;
    }

    public function render()
    {

        $result = Sale::where('visa_id',$this->visa_id)
                        ->with('visa')
                        ->get();
        return view('livewire.sales.sale-show', ['sale' => $result]);
    }
}

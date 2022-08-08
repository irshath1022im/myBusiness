<?php

namespace App\Http\Livewire\Transections;

use App\Models\Transection;
use Livewire\Component;

class LogsByCustomerId extends Component
{

    public $sale_id;

    public function mount($sale_id)
    {
        $this->sale_id = $sale_id;
    }

    public function render()
    {
        $result = Transection::where('sale_id', $this->sale_id)
                    ->with('sale')
                    ->get();
        return view('livewire.transections.logs-by-customer-id',['transections' => $result]);
    }

    
}

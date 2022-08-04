<?php

namespace App\Http\Livewire\Transections;

use App\Models\Transection;
use Livewire\Component;

class LogsByCustomerId extends Component
{

    public $customer_id;

    public function mount($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    public function render()
    {
        $result = Transection::where('customer_id', 1)->get();
        return view('livewire.transections.logs-by-customer-id',['transections' => $result]);
    }
}

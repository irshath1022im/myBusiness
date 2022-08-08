<?php

namespace App\Http\Livewire\Transections;

use App\Models\Transection;
use Livewire\Component;

class IndexTransection extends Component
{

    public $customer_id;

    public function mount($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    public function render()
    {
        $result = Transection::with('customer')->get();
        return view('livewire.transections.index-transection',['transections' => $result]);
    }
}

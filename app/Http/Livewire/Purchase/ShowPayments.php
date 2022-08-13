<?php

namespace App\Http\Livewire\Purchase;

use App\Models\Payment;
use Livewire\Component;

class ShowPayments extends Component
{

    public $purchase_id;

    public function mount($purchase_id)
    {
        $this->purchase_id = $purchase_id;
    }

    public function render()
    {

        $result = Payment::where('purchase_id', $this->purchase_id)->get();
        
        return view('livewire.purchase.show-payments',['payments' => $result]);
    }
}

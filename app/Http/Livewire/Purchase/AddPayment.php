<?php

namespace App\Http\Livewire\Purchase;

use App\Models\Payment;
use Livewire\Component;

class AddPayment extends Component
{

    public $amount;
    public $remark;
    public $purchase_id;
    public $date;

    protected $rules= [
        'purchase_id' => 'required',
        'date' => 'required',
        'amount' => 'required',
        'remark' => 'required'
    ];

    public function mount($purchase_id)
    {
        $this->purchase_id = $purchase_id;
    }

    public function formSubmit()
    {
        $validated = $this->validate();

        Payment::create($validated);
        $this->emit('paymentPosted');

        $this->reset();
        session()->flash('message','Payment is posted');



    }

    public function render()
    {
        return view('livewire.purchase.add-payment');
    }
}

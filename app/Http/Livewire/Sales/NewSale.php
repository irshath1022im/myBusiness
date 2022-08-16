<?php

namespace App\Http\Livewire\Sales;

use App\Models\Customer;
use App\Models\Sale;
use Livewire\Component;

class NewSale extends Component
{

    public $date;
    public $visa_id;
    public $selected_customer_id;
    public $amount;
    public $remark;
    public $customers;

    protected $rules = [
        'date' => 'required',
        'selected_customer_id' => 'required',
        'amount' => 'required',
        'remark' => ''
    ];


    public function formSubmit()
    {

        $validated = $this->validate();

        $data = [
            'date' => $this->date,
            'visa_id' => $this->visa_id,
            'customer_id' => $this->selected_customer_id,
            'amount' => $this->amount,
            'remark' => $this->remark
        ];

        Sale::create($data);

        session()->flash('message', 'Sale is Added');
        return redirect()->route('visas.show',['visa' => $this->visa_id]);
    }

    public function mount($visa_id)
    {
        $this->visa_id= $visa_id;
        $this->customers= Customer::get();
    }

    public function render()
    {
        return view('livewire.sales.new-sale');
    }
}

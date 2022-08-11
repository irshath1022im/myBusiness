<?php

namespace App\Http\Livewire\Purchase;

use App\Models\Purchase;
use App\Models\Supplier;
use Livewire\Component;

class PurchaseForm extends Component
{

    public $date;
    public $supplier_id;
    public $cost;
    public $suppliers;
    public $selected_supplier_id;

    protected $rules = [
        'date' => 'required',
        'selected_supplier_id' => 'required',
        'cost'=> 'required'
    ];


    public function formSubmit()
    {
        $validated=$this->validate();

        $data = [
            'date' => $validated['date'],
            'supplier_id' => $validated['selected_supplier_id'],
            'cost' => $validated['cost']
        ];

        Purchase::create($data);

        session()->flash('message', 'New Purchase is added');

        return redirect()->to('purchase');

    }


    public function mount()
    {
        $this->suppliers  = Supplier::get();
    }

    public function render()
    {
        return view('livewire.purchase.purchase-form');
    }
}

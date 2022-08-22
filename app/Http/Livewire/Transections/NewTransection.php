<?php

namespace App\Http\Livewire\Transections;

use App\Models\Transection;
use Livewire\Component;

class NewTransection extends Component
{

    public $date;
    public $amount;
    public $remark;
    public $sale_id;
    public $visa_id;


    protected $rules =[
        'date' => 'required',
        'sale_id'=> 'required',
        'amount' => 'required',
        'remark' => ''
    ];

    public function formSubmit()
    {
        $validated = $this->validate();

        Transection::create($validated);
        session()->flash('message', 'Transections is Added...');

       return redirect()->route('visas.show',['visa' => $this->visa_id]);
    }


    public function mount($sale_id, $visa_id)
    {
        $this->sale_id = $sale_id;
        $this->visa_id = $visa_id;
    }

    public function render()
    {
        return view('livewire.transections.new-transection');
    }
}

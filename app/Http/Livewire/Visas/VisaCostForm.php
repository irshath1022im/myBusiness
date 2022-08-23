<?php

namespace App\Http\Livewire\Visas;

use App\Models\VisaCost;
use Livewire\Component;

class VisaCostForm extends Component
{

    public $visa_id;
    public $date;
    public $amount;
    public $remark;

    protected $rules=[
        'visa_id' => 'required',
        'date'=> 'required',
        'amount' => 'required',
        'remark' => ''
    ];


    public function formSubmit()
    {
        $validated = $this->validate();
        VisaCost::create($validated);

        session()->flash('message', 'Transections is Added....');
        return redirect()->route('visas.show',['visa' => $this->visa_id]);
    }

    public function mount($visa_id)
    {
        $this->visa_id = $visa_id;
    }

    public function render()
    {
        return view('livewire.visas.visa-cost-form');
    }
}

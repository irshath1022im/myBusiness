<?php

namespace App\Http\Livewire\Components;

use App\Models\Profit;
use App\Models\Visa;
use Livewire\Component;

class NewProfitForm extends Component
{

    public $visa_id;
    public $company;
    public $company_id;
    public $date;
    public $amount;
    public $remark;

    protected $rules = [
        'visa_id' => 'required',
        'company_id' => 'required',
        'date' => 'required',
        'amount'=> 'required',
        'remark' => ''
    ];

    public function formSubmit()
    {
        $validated = $this->validate();

        Profit::create($validated);

        redirect()->route('profits');


    }

    public function mount($visa_id)
    {
        $this->visa_id = $visa_id;

        $visa = Visa::with('company')->find($visa_id);
        $this->company = $visa->company->company;
        $this->company_id = $visa->company_id;


    }

    public function render()
    {
        return view('livewire.components.new-profit-form');
    }
}

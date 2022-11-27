<?php

namespace App\Http\Livewire\Visas;

use App\Models\Company;
use App\Models\Position;
use App\Models\Visa;
use Livewire\Component;

class NewVisaForm extends Component
{
    public $purchase_id;
    public $vpnumber;
    public $selected_company_id;
    public $selected_position;
    public $selected_country;
    public $cost;
    public $countries=['srilanka', 'india','pakistan','nepal'];
    public $positions;
    public $companies;
    public $expiry_date;

    protected $rules = [
        'vpnumber' => 'required',
        'selected_company_id'=>'required',
        'selected_position'=>'required',
        'selected_country'=>'required',
        'cost' => 'required',
        'expiry_date' => 'required'
    ];

    public function formSubmit()
    {
        $this->validate();

        $data = [
            'purchase_id' => $this->purchase_id,
            'vpnumber' => $this->vpnumber,
            'company_id' => $this->selected_company_id,
            'position'=> $this->selected_position,
            'country' => $this->selected_country,
            'cost' => $this->cost,
            'expiry_date' => $this->expiry_date
        ];

        Visa::create($data);
        $this->resetExcept('purchase_id');
        $this->emit('visaPosted');

        session()->flash('message', 'Item Has been Posted');
        return redirect()->route('purchase.show',['purchase' => $this->purchase_id]);

    }



    public function mount($purchase_id)
    {
        $this->purchase_id;
              $this->companies = Company::get();
        $this->positions = Position::get();
    }

    public function render()
    {
        return view('livewire.visas.new-visa-form');
    }
}

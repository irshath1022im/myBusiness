<?php

namespace App\Http\Livewire\Visas;

use App\Models\Status;
use App\Models\VisaAssignment;
use App\Models\VisaHolder;
use Livewire\Component;

class VisaAssignmentForm extends Component
{
    public $visa_id;
    public $visaHolders=[];
    public $date;
    public $visa_holder_id;
    public $visa_number;
    public $expiry_date;
    public $status;
    public $statuses=[];
    public $visaHolderPath;

    protected $rules=[
        'visa_id' => 'required',
        'visa_holder_id' => 'required',
        'date' => 'required',
        'visa_number' => 'required',
        'expiry_date' => 'required',
        'status' => 'required',
    ];

    // protected $listeners =['assignRequest'];


    public function assignRequest($visa_id)
    {
        $this->visa_id = $visa_id;
    }

    public function formSubmit()
    {
        $this->validate();

        $data = [
            'visa_id'=> $this->visa_id,
            'date' => $this->date,
            'visa_holder_id'=> $this->visa_holder_id,
            'visa_number' => $this->visa_number,
            'expiry_date' => $this->expiry_date,
            'status' => $this->status,
        ];
        VisaAssignment::create($data);

        session()->flash('message', 'Visa has been Assied to User');
        return redirect()->route('visas.index');
    }

    public function updatedVisaHolderId()
    {
        if($this->visa_holder_id > 0) {
        $this->visaHolderPath = $this->visaHolders->where('id', $this->visa_holder_id);
        }

    }

    public function mount()
    {
        $this->visaHolders = VisaHolder::select('id','name','image')->get();
        $this->statuses = Status::get();
    }

    public function render()
    {
        return view('livewire.visas.visa-assignment-form');
    }
}

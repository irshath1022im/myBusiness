<?php

namespace App\Http\Livewire\VisaHolders;

use App\Models\VisaHolder;
use Livewire\Component;
use Livewire\WithFileUploads;

class VisaHolderForm extends Component
{

    use WithFileUploads;

    public $name;
    public $passport_number;
    public $expiry_date;
    public $image;
    public $contact_number;
    public $country;
    public $filePath;



    protected $rules=[
        'name' => 'required',
        'passport_number' => 'required',
        'expiry_date' => 'required',
        'image' => '',
        'contact_number' => '',
        'country'=> 'required'
    ];


    public function formSubmit()
    {
        $validated = $this->validate();
        $fileExtention = $this->image->getClientOriginalExtension();
        $this->filePath = $this->image->storeAs('/public/passport_copy', $this->passport_number.'.'.$fileExtention);


        $data = [
            'name' => $validated['name'],
            'passport_number' => $validated['passport_number'],
            'expiry_date' => $validated['expiry_date'],
            'image' => $this->filePath,
            'contact_number' => $validated['contact_number'],
            'country' => $validated['country']
        ];


        VisaHolder::create($data);
        session()->flash('message', 'Visa Holder is Added...');
        return redirect()->route('visaholders.index');

    }


    public function render()
    {
        return view('livewire.visa-holders.visa-holder-form');
    }
}

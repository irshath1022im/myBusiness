<?php

namespace App\Http\Livewire\Suppliers;

use App\Models\Supplier;
use Livewire\Component;

class CreateForm extends Component
{

    public $name;
    public $contact_number;

    protected $rules=[
        'name' => 'required',
        'contact_number' => 'required'

    ];

    public function formSubmit()
    {

        $validated = $this->validate();

        Supplier::create($validated);

        session()->flash('message', 'Supplier is added');

        return redirect()->to('supplier');




    }

    public function render()
    {
        return view('livewire.suppliers.create-form');
    }
}

<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{

    public $customer;
    public $contact_number;

    protected $rules = [
        'customer' => 'required',
        'contact_number' => 'required'
    ];

    public function formSubmit()
    {
        $validated = $this->validate();

        Customer::create($validated);

        session()->flash('message', 'Customer is Added');

        return redirect()->route('customers.index');
    }


    public function render()
    {
        return view('livewire.customer.create-customer');
    }
}

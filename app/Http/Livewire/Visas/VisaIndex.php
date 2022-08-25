<?php

namespace App\Http\Livewire\Visas;

use App\Models\Visa;
use Livewire\Component;
use Livewire\WithPagination;

class VisaIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    // public function assignemtRequest()
    // {
    //     $this->emit('assignmentRequest2', 2);
    // }

    public function render()
    {
        $result = Visa::with('company','visa_assignment')->withCount('sale')->paginate(10);
        return view('livewire.visas.visa-index',['visas' => $result]);
    }
}

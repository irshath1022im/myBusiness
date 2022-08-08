<?php

namespace App\Http\Livewire\Visas;

use Livewire\Component;

class Show extends Component
{

    //getting data from views/visas/show.blade.php

    public $visa_id;
    public $country;
    public $cost;

    public function mount($visa)
    {

        $this->visa_id = $visa->id;
        $this->country = $visa->country;
        $this->cost = $visa->cost;
    }

    public function render()
    {
        return view('livewire.visas.show');
    }
}

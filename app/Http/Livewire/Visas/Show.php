<?php

namespace App\Http\Livewire\Visas;

use App\Models\Visa;
use Livewire\Component;

class Show extends Component
{

    //getting data from views/visas/show.blade.php

    public $visa;
    public $visa_id;
    public $country;
    public $cost;

    public function mount($visa)
    {
        $this->visa= $visa;


        // $this->visa_id = $visa_id;
        // $this->country = $visa->country;
        // $this->cost = $visa->cost;
    }

    public function render()
    {

        // $result = Visa::findOrFail($this->visa_id);

    //    return dd($result);

        // if(!$result)
        // {

        //     return redirect()->to('/404');
        // }
        return view('livewire.visas.show');
    }
}

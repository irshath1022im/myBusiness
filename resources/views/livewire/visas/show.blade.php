<div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ $visa_id }} / {{ $country }} / {{ $cost }}</div>
        </div>
    <div class="card-body">

        @livewire('sales.sale-show',['visa_id' => $visa_id])


        <hr>


        @livewire('components.visa-cost',['visa_id' => $visa_id])




    </div>
</div>
</div>

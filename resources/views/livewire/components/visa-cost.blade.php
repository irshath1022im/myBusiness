<div>

    {{-- @dump($visa_costs[0]->sale->amount) --}}

    @if (count($visa_costs) > 0 )
        
   
        <div class="card">
            <div class="card-header">
                TRANSECTION LOGS BY IRSHATH 
            </div>

            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ORDER #</th>
                            <th>PAID  </th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tbody>


                    
                    @foreach ($visa_costs as $item)

                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->remark }}</td>
                            </tr>
                    @endforeach

                    </tbody>
                </table>
            
            </div>

            {{-- @dump($visa_costs ) --}}

            <div class="card-footer">
              <p class="d-inline bg-success p-2">Total Spent: </p>   {{ $visa_costs->sum('amount')}} QR 
              <p class="d-inline bg-success p-2">Visa Sold: </p>{{ $visa_costs[0]->visa->sale->amount }} QR 
              <p class="d-inline bg-success p-2">Profit: </p>{{ $visa_costs[0]->visa->sale->amount - $visa_costs->sum('amount') }} QR 

            </div>


        </div>

    @else

    <div class="alert alert-info" role="alert">
        <strong>NO TRANSECTION FOUND....</strong>
    </div>
    @endif

</div>

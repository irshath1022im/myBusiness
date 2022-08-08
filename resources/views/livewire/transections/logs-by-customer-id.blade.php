<div>

    {{-- @dump($transections) --}}
    {{-- @dump($transections->sum('amount')) --}}
    {{-- @dump($transections[0]->sale->amount) --}}
   

    @if (count($transections) > 0 )
        
   
        <div class="card">
            <div class="card-header">
                TRANSECTION LOGS BY CUSTOMER 
            </div>

            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ORDER #</th>
                            <th>AMOUNT</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tbody>


                    
                    @foreach ($transections as $item)

                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->remark }}</td>
                            </tr>
                    @endforeach

                    </tbody>
                </table>
            
            </div>

            <div class="card-footer">
              <p class="d-inline bg-success p-2">Balance: </p>   {{ $transections[0]->sale->amount - $transections->sum('amount')}} QR 
            </div>


        </div>

    @else

    <div class="alert alert-info" role="alert">
        <strong>NO TRANSECTION FOUND....</strong>
    </div>
    @endif



</div>
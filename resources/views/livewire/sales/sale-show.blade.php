<div>

    {{-- @dump(count($sale)) --}}

    @if (count($sale) > 0)
        


            <div class="card">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SALE #</th>
                                <th>CUSTOMER NAME</th>
                                <th>AMOUNT</th>
                                <th>REMARK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sale as $item)
                                
                            <tr>
                                <td scope="row">{{ $item->id}}</td>
                                <td>{{ $item->customer->customer }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->remark }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    


                    @livewire('transections.logs-by-customer-id',['sale_id' => $sale[0]['id']])


                </div>


            </div>

                
            @else
            
                <div class="alert alert-info" role="alert">
                    <strong>NO SALES FOUND....</strong>
                </div>
                
            @endif








</div>

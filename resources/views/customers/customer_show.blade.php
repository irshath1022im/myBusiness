@extends('layouts.app')

@section('content')
   
   <div class="card">
    <div class="card-header">
        {{ $customer->customer }}
    </div>
    <div class="card-body">
        

    
                <table class="table">
                    <thead>
                        <tr>
                            <th>SALE ID</th>
                            <th>VISA ID</th>
                            <th>VP NUMBER</th>
                            <th>COUNTRY</th>
                            <th>SALE AMOUNT</th>
                            <th>RECEIVED</th>
                            <th>BALANCE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer->sales as $sale)
            
                            <tr>
                                <td scope="row">{{ $sale->id }}</td>
                                <td><a href={{ route('visas.show', ['visa' => $sale->visa->id]) }}>{{ $sale->visa->id }}</a></td>
                                <td>{{ $sale->visa->project->vpnumber }}</td>
                                <td>{{ $sale->visa->country }}</td>
                                <td>{{ $sale->amount }}</td>
                                <td>{{ $sale->transections->sum('amount')}}</td>
                                <td>{{  $sale->amount - $sale->transections->sum('amount') }}</td>
                            </tr>
                      
                        @endforeach
                    </tbody>
                </table>
                
    
       

    </div>


    <div class="card-footer text-muted">
        Footer
    </div>
   </div>
@endsection
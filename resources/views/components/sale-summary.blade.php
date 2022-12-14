<table class="table">
    <thead>
        <tr>
            <th>SALE ID</th>
            <th>DATE</th>
            <th>VISA ID</th>
            <th>CUSTOMER</th>
            <th>SALE AMOUNT</th>
            <th>CASH RECEIVED</th>
            <th>COST</th>
            <th>ON HAND</th>
            <th>BALANCE TO RECEIVE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)

        <tr>
            <td scope="row">{{$sale->id}}</td>
            <td>{{ $sale->date}}</td>
            <td><a href="{{ route('visas.show',['visa'=> $sale->visa_id]) }}">{{ $sale->visa_id}}</a></td>
            <td>{{ $sale->customer->customer}}</td>
            <td>{{ $sale->amount}}</td>
            <td>{{ $sale->transections->sum('amount')}}</td>
            <td>{{ $sale->visa_costs->sum('amount')}}</td>
            <td>{{ $sale->transections->sum('amount') - $sale->visa_costs->sum('amount') }} </td>
            <td>{{ $sale->amount -$sale->transections->sum('amount') }} </td>
        </tr>

        @endforeach
    </tbody>
</table>

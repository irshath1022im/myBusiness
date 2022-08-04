<div>
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
            
        </div>
    </div>
</div>

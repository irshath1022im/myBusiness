@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $sponsor_change->id }}
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>QID</th>
                        <th>EXPIRY DATE</th>
                        <th>PRESENT COMPANY</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">{{ $sponsor_change->id }}</td>
                        <td>{{ $sponsor_change->qid }}</td>
                        <td>{{ $sponsor_change->expiry_date }}</td>
                        <td>{{ $sponsor_change->present_company }}</td>
                        <td>STATUS</td>
                        
                    </tr>
                    
                </tbody>
            </table>

            @if (count($sponsor_change->logs) > 0)
       

                    <div class="card">
                        <div class="card-header">
                        LOGS
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>DATE</th>
                                        <th>DATE</th>
                                        <th>REMARK</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($sponsor_change->logs as $item)
                                    <tr>
                                        <td scope="row">{{ $item->id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->remark }}</td>
                                    </tr>
                                    @endforeach
                            
                                
                                </tbody>
                            </table>
                            
                        </div>

                        <div class="card-footer text-muted">
                            Profit :: {{ $sponsor_change->logs->sum('amount') }}
                        </div>
                    </div>

                     
            @else

            <div class="alert alert-warning" role="alert">
                <strong>NO TRANSECTION LOGS FOUND</strong>
            </div>
            
        
            @endif
    
        </div>
     
    </div>
@endsection
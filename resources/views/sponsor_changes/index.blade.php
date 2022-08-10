@extends('layouts.app')


@section('content')
    
<div class="card">
    <div class="card-header">
        <div class="card-title">SPONSOR CHANGES</div>
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
                    <th>LOGS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sponsor_changes as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->qid }}</td>
                    <td>{{ $item->expiry_date }}</td>
                    <td>{{ $item->present_company }}</td>
                    <td>STATUS</td>
                    <td>
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('sponsor_changes.show', ['sponsor_change' => $item->id]) }}" role="button">LOGS</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        
    </div>
</div>

    


@endsection
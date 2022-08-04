@extends('layouts.app')

@section('content')
    
    @foreach ($projects as $item)
        
        <div class="card">
            <div class="card-header">{{ $item->vpnumber }} / {{ $item->expiry_date }}
                {{-- <div class="card-title">{{ $visa->id }} / {{ $visa->country }} / {{ $visa->position }} /{{ $visa->cost }} </div> --}}
            </div>
            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title"></div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>COUNTRY</th>
                                    <th>POSITION</th>
                                    <th>COST</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($item->visas as $visa)
                                    <tr>
                                        <td scope="row">{{ $visa->id }}</td>
                                        <td>{{ $visa->country }}</td>
                                        <td>{{ $visa->position }}</td>
                                        <td>{{ $visa->cost }}</td>
                                        <td>CONSUMED</td>
                                        <td>
                                            <a href="{{ route('visas.show',['visa' => $visa->id]) }}">
                                                <button class="btn btn-info btn-sm">SALE DETAILS</button></a>
                                        </td>
                                    
                                    </tr>
                                   
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
               
             
            </div>
        </div>

    </br>

    @endforeach
    

@endsection
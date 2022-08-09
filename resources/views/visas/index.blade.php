@extends('layouts.app')

@section('content')
    
    @foreach ($projects as $project)
        
        <div class="card">
            <div class="card-header">{{ $project->project_type->type}} / {{ $project->references }}
                {{-- <div class="card-title">{{ $visa->id }} / {{ $visa->country }} / {{ $visa->position }} /{{ $visa->cost }} </div> --}}
            </div>
            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">ITEMS</div>
                    </div>

                    {{-- @dump(count($project->visas)) --}}

                   
                    @if (count($project->visas))
                        
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>VISA ID</th>
                                        <th>VP NUMBER</th>
                                        <th>COUNTRY</th>
                                        <th>POSITION</th>
                                        <th>COST</th>
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($project->visas as $visa)
                                        <tr>
                                            <td scope="row">{{ $visa->id }}</td>
                                            <td>{{ $visa->vpnumber }}</td>
                                            <td>{{ $visa->country }}</td>
                                            <td>{{ $visa->position }}</td>
                                            <td>{{ $visa->cost }}</td>
                                            <td>{{ $visa->company->company}}</td>
                                            <td>
                                                <a href="{{ route('visas.show',['visa' => $visa->id]) }}">
                                                    <button class="btn btn-info btn-sm">SALE DETAILS</button></a>
                                            </td>
                                        
                                        </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>

               


                    @else
                    
                    <div class="alert alert-light" role="alert">
                        <strong>NO ITEMS FOUND ON THIS REFERENCE</strong>
                    </div>
                    
                    @endif


                </div>
               
             
            </div>
        </div>

    </br>

    @endforeach
    

@endsection
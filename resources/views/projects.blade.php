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

                    {{-- @dump(count($item->visas)) --}}

                   
                    @if (count($project->visas))
                        
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>VISA ID</th>
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

               

                     @elseif (count($project->sponsorChanges))

                     {{-- @dump($project->sponsorChanges) --}}

                     <div class="card">
                        <div class="card-body">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ORDER #</th>
                                        <th>QID</th>
                                        <th>EXPIRY DATE</th>
                                        <th>PRESENT COMPANY</th>
                                        <th>STATUS</th>
                                        <th>REMARK</th>
                                        <th>LOGS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project->sponsorChanges as $item)
                                        <tr>
                                            <td scope="row">{{ $item->id }}</td>
                                            <td>{{ $item->qid }}</td>
                                            <td>{{ $item->expiry_date }}</td>
                                            <td>{{ $item->present_company }}</td>
                                            <td>STATUS</td>
                                            <td>{{ $item->remark }}</td>
                                            <td>
                                                <a name="" id="" class="btn btn-primary" href="{{ route('sponsor_changes.show', ['sponsor_change' => $item->id])}}" role="button">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                          
                        </div>
                     </div>



                        {{-- @livewire('components.sponsor-change-project-card', ['project_id']) --}}
                    
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
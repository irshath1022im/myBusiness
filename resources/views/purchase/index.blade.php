@extends('layouts.app')

@section('content')

    @foreach ($purchases as $purchase)

        <div class="card">
            <div class="card-header">{{$purchase->date}} / {{$purchase->supplier->name}} / {{$purchase->cost}} / <a class="btn btn-info btn-sm " href="{{route('purchase.show',['purchase'=>$purchase->id])}}"  role="button">PAYMENT HISTORY</a>
                {{-- <div class="card-title">{{ $visa->id }} / {{ $visa->country }} / {{ $visa->position }} /{{ $visa->cost }} </div> --}}
            </div>
            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">VISAS</div>
                    </div>

                    {{-- @dump(count($item->visas)) --}}


                    @if (count($purchase->visas))

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>VP NUMBER</th>
                                        <th>COUNTRY</th>
                                        <th>POSITION</th>
                                        <th>COST</th>
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($purchase->visas as $visa)
                                        <tr>
                                            <td scope="row">{{ $visa->id }}</td>
                                            <td class="text-uppercase">{{ $visa->vpnumber }}</td>
                                            <td class="text-uppercase">{{ $visa->country }}</td>
                                            <td class="text-uppercase">{{ $visa->position }}</td>
                                            <td>{{ $visa->cost }}</td>
                                            <td class="text-uppercase">{{ $visa->company->company}}</td>
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

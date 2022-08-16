@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">SALES <a class="btn btn-info btn-sm " href="#"   role="button">NEW SALE</a></div>
        </div>
      <div class="card-body">

        <table class="table">
            <thead>
                <tr>
                    <th>SALE ID</th>
                    <th>SUPPLIER</th>
                    <th>BUYER</th>
                    <th>VP NUMBER</th>
                    <th>COMPANY</th>
                    <th>COUNTRY</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)

                <tr>
                    <td scope="row">{{$sale->id}}</td>
                    <td>{{ $sale->visa->purchase->supplier->name}}</td>
                    <td>{{ $sale->customer->customer}}</td>
                    <td>{{ $sale->visa->vpnumber}}</td>
                    <td>{{ $sale->visa->company->company}}</td>
                    <td>{{ $sale->visa->country}}</td>
                    <td></td>
                </tr>

                @endforeach
            </tbody>
        </table>



      </div>

    </div>
@endsection

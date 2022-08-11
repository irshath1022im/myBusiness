@extends('layouts.app')

@section('content')

<div class="card-group">

        <div class="card">
        <img class="card-img-top w-100 h-750" src="/images/purchase.png" alt="Card image cap">

        <div class="card-footer">
            <a href="{{ route('purchase.index') }}">
                <h3>PURCHASES</h3>
            </a>
        </div>
    </div>



        <div class="card">
            <img class="card-img-top w-100 h-75" src="/images/sale.jpg" alt="Card image cap">
            <div class="card-footer mt-5">
              <a href="{{ route('visas.index') }}"> <h3>SALE</h3></a>
            </div>
        </div>



    </div>

@endsection

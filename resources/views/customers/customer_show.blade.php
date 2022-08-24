@extends('layouts.app')

@section('content')

   <div class="card">
    <div class="card-header">
        <div class="card-title text-uppercase">{{ $customer->customer }}</div>
</div>
    <div class="card-body">

                @component('components.sale-summary',['sales' => $customer->sales])

                @endcomponent




    </div>



   </div>
@endsection

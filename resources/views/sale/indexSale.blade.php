@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">SALES <a class="btn btn-info btn-sm " href="#"   role="button">NEW SALE</a></div>
        </div>
      <div class="card-body">

            @component('components.sale-summary',['sales' => $sales])

            @endcomponent


      </div>

    </div>
@endsection

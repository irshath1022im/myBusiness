@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title ">CUSTOMERS</div>
    </div>
    <div class="card-body">


    @if ( $customers->isEmpty())
        @component('components.empty-data',['message' => 'No Customers Found..'])

        @endcomponent
    @endif





    <div class="row">

        @foreach ($customers as $customer)


                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body text-center">
                            <h3 class="card-title text-uppercase bg-info p-3">{{ $customer->customer }}</h3>
                            <img class="card-img-top img-fluid" src="/images/customer.jpg" alt="Card image cap">
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">
                                    VISAS <span class="badge bg-primary">15</span>
                            </button>

                            <button class="btn btn-success">
                                ACCOUNTS <span class="badge bg-primary">15</span>
                        </button>
                        </div>

                    </div>

                </div>
          @endforeach

    </div>


</div>
</div>



@endsection

@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title ">CUSTOMERS <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modelId">NEW CUSTOMER</button></div>
    </div>
    <div class="card-body">


    @if ( $customers->isEmpty())
        @component('components.empty-data',['message' => 'No Customers Found..'])

        @endcomponent
    @endif



{{-- @dump($customers) --}}



    <div class="row">

        @foreach ($customers as $customer)


                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body text-center">
                            <h3 class="card-title text-uppercase bg-info p-3">{{ $customer->customer }}</h3>
                            <img class="card-img-top img-fluid" src="/images/customer.jpg" alt="Card image cap">
                        </div>

                        <div class="card-footer">
                           <a href="{{ route('customers.show', ['customer'=> $customer->id]) }}"> <button class="btn btn-success">
                                    VISAS <span class="badge bg-primary">{{ $customer->sales_count }}</span>
                            </button></a>

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




<!-- Modal New Customer-->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">NEW CUSTOMER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('customer.create-customer')
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div> --}}
        </div>
    </div>
</div>



@endsection

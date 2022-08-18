@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">{{$purchase->id}}/{{$purchase->date}} / {{$purchase->supplier->name}} / {{$purchase->cost}} /
            Balance To Pay: {{ $purchase->cost - $purchase->payments->sum('amount')}}
            <a name="" id="" class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modelId">Add Visa</a>
        </div>
    </div>

    <div class="card-body">



        <div class="card">

            <div class="card-header">
                <div class="card-title">VISAS</div>
            </div>

            <div class="card-body">

                @if (count($purchase->visas) > 0)

                   @component('components.visatable',['visas' => $purchase->visas])

                   @endcomponent



                @else

                   <div class="alert alert-warning" role="alert">
                    <strong>NO VISAS FOUND...</strong>
                   </div>


                 @endif


            </div>

        </div>

<br/>


{{-- when this is no purchase items, no need display the purchase table --}}

        @if (count($purchase->visas) > 0)
             @livewire('purchase.show-payments',['purchase_id'=>$purchase->id])
        @endif

    </div>





    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">VISAS FOR : PURCHASE ID : <button type="button" class="btn btn-primary">{{ $purchase->id }}</button></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                        @livewire('visas.new-visa-form',['purchase_id' => $purchase->id])
                </div>
                {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div> --}}
            </div>
        </div>
    </div>







@endsection

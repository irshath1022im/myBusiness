@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">{{$purchase->id}}/{{$purchase->date}} / {{$purchase->supplier->name}} / {{$purchase->cost}} /
            Balance To Pay: {{ $purchase->cost - $purchase->payments->sum('amount')}}
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

          @livewire('purchase.show-payments',['purchase_id'=>$purchase->id])
 
    </div>



   






@endsection

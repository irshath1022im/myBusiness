@extends('layouts.app')

@section('content')

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if (count($purchases) < 1 )
        <div class="alert alert-warning" role="alert">
            <strong>NO PURCHASES FOUND <a href="{{ route('purchase.create') }}" class="badge bg-primary">CREATE NEW</a></strong>
        </div>

    @endif

    @foreach ($purchases as $purchase)

        <div class="card">
            <div class="card-header">

                <div class="card-title">{{$purchase->date}} / {{$purchase->supplier->name}} / {{$purchase->cost}}
                    <a name="" id="" class="btn btn-primary" href="{{ route('purchase.show',['purchase' => $purchase->id]) }}" role="button">VIEW</a>
                </div>
            </div>
            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">VISAS</div>
                    </div>

                    {{-- @dump(count($item->visas)) --}}


                    @if (count($purchase->visas))

                        <div class="card-body">
                          @component('components.visatable',['visas' => $purchase->visas])

                          @endcomponent

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

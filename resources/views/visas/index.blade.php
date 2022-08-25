@extends('layouts.app')

@section('content')

    {{-- @dump($visas) --}}

        <div class="card">
            <div class="card-header">
                <div class="card-title"><h3>VISAS</h3></div>
            </div>

            <div class="card-body">

                    @livewire('visas.visa-index')

                </div>


            </div>


@endsection

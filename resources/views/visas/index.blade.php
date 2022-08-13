@extends('layouts.app')

@section('content')


        <div class="card">
            <div class="card-header">VISAS
                {{-- <div class="card-title">{{ $visa->id }} / {{ $visa->country }} / {{ $visa->position }} /{{ $visa->cost }} </div> --}}
            </div>

            <div class="card-body">

                @if (count($visas) > 1)

                    @component('components.visatable',['visas' => $visas])

                    @endcomponent

                    @else

                        <div class="alert alert-light" role="alert">
                            <strong>NO ITEMS FOUND ON THIS REFERENCE</strong>
                        </div>

                @endif


                </div>


            </div>


@endsection

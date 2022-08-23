@extends('layouts.app')

@section('content')

    {{-- @dump($visas) --}}

        <div class="card">
            <div class="card-header">
                <div class="card-title"><h3>VISAS</h3></div>
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

                <div class="card-footer">
                    {{ $visas->links() }}
                </div>

            </div>


@endsection

@extends('layouts.app')

@section('content')

 <div class="card">
    <div class="card-header">
        <div class="card-title">VISA HOLDERS
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modelId">
                NEW HOLDER
              </button>
        </div>
    </div>
    <div class="card-body">

        <div class="row">

            @foreach ($visa_holders as $holder)



          <div class="col-sm-6 col-lg-3">

            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-uppercase">{{ $holder->name }}</h3>
                <div class="card-image"><img src="{{ Storage::url($holder->image) }}"  class="img-fluid"/></div>
                <p class="card-text">PP NUM: {{ $holder->passport_number }}</p>
                <p class="card-text">PP EXPIRY: {{ $holder->expiry_date }}</p>
              </div>

              <div class="card-footer">

                @empty($holder->visa_assignment->visa_id)

                <a name="" id="" class="btn btn-success" href="#" role="button">NO VISA FOUND</a>

                    @else

                    <a name="" id="" class="btn btn-success" href="{{ route('visas.show',['visa' => $holder->visa_assignment->visa_id]) }}" role="button">GO TO VISA</a>
                @endempty
              </div>
            </div>

          </div>

          @endforeach

        </div>

    </div>

 </div>





<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">NEW VISA HOLDER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('visa-holders.visa-holder-form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save</button> --}}
            </div>
        </div>
    </div>
</div>




@endsection

@extends('layouts.app')

@section('content')

 <div class="card">
    <div class="card-header">
        VISA HOLDERS
    </div>
    <div class="card-body">

        <div class="row">

            @foreach ($visa_holders as $holder)



          <div class="col-sm-6 col-lg-3">

            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-uppercase">{{ $holder->name }}</h3>
                <p class="card-text">IMAGE</p>
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




@endsection

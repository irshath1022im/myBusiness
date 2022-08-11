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

                    <table class="table">
                        <thead>
                            <tr>
                                <th>VP NUMBER</th>
                                <th>COMPNAY</th>
                                <th>COUNTRY</th>
                                <th>QTY</th>
                                <th>COST</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($purchase->visas as $visa)
                                <tr>
                                    <td scope="row">{{ $visa->vpnumber }}</td>
                                    <td>{{ $visa->company->company }}</td>
                                    <td>{{ $visa->country }}</td>
                                    <td>{{ $visa->qty }}</td>
                                    <td>{{ $visa->cost }}</td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>



                @else

                   <div class="alert alert-warning" role="alert">
                    <strong>NO VISAS FOUND...</strong>
                   </div>


                 @endif

            </div>

        </div>
    </div>



    <div class="card-body">

        <div class="card">

            <div class="card-header">
                <div class="card-title">PAYMENT HISTORY </div>
            </div>

            <div class="card-body">

                @if (count($purchase->payments) > 0)

                    <table class="table">
                        <thead>
                            <tr>
                                <th>DATE</th>
                                <th>AMOUNT</th>
                                <th>REMARK</th>
                                <th>ITEMS</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($purchase->payments as $payment)
                                <tr>
                                    <td scope="row">{{ $payment->date }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->remark }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            ITEMS
                                        </button>

                                    </td>


                                </tr>

                            @endforeach
                        </tbody>
                    </table>



                @else

                <div class="alert alert-warning" role="alert">
                    <strong>NO PAYMENT MADE FOR THIS PURCHASE...</strong>
                   </div>

                 @endif

            </div>

        </div>
    </div>

</div>



<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">VISAS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COUNTRY</th>
                        <th>POSITION</th>
                        <th>COST</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($purchase->visas as $visa)
                        <tr>
                            <td scope="row">{{ $visa->id }}</td>
                            <td>{{ $visa->country }}</td>
                            <td>{{ $visa->position }}</td>
                            <td>{{ $visa->cost }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


@endsection

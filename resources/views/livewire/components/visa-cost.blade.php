<div>

    {{-- @dump($visa_costs[0]->sale->amount) --}}

    @if (count($visa_costs) > 0 )


        <div class="card">
            <div class="card-header">
                <div class="card-title text-underline">
                    <strong>VISA COSTS</strong>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#visa-cost">
                        ADD TRANSECTION
                      </button>
                </div>

            </div>

            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ORDER #</th>
                            <th>DATE</th>
                            <th>PAID  </th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tbody>



                    @foreach ($visa_costs as $item)

                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->remark }}</td>
                            </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

            {{-- @dump($visa_costs ) --}}

            <div class="card-footer">
              <p class="d-inline bg-success p-2">Total Spent: </p>   {{ $visa_costs->sum('amount')}} QR
              <p class="d-inline bg-success p-2">Visa Sold: </p>{{ $visa_costs[0]->visa->sale->amount }} QR
              <p class="d-inline bg-success p-2">Profit: </p>{{ $visa_costs[0]->visa->sale->amount - $visa_costs->sum('amount') }} QR

            </div>


        </div>

    @else

    <div class="alert alert-info" role="alert">
        <strong>NO TRANSECTION FOUND....   <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#visa-cost">
            ADD TRANSECTION
          </button></strong>
    </div>
    @endif






    <!-- Modal -->
    <div class="modal fade" id="visa-cost" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">VISA COSTS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('visas.visa-cost-form',['visa_id' => $visa_id])

                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div> --}}
            </div>
        </div>
    </div>


</div>

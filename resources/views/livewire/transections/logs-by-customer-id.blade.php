<div>

    {{-- @dump($transections) --}}
    {{-- @dump($transections->sum('amount')) --}}
    {{-- @dump($transections[0]->sale->amount) --}}


    @if (count($transections) > 0 )


        <div class="card">
            <div class="card-header">
                TRANSECTION LOGS BY CUSTOMER
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modelId">
                    ADD TRANSECTION
                  </button>
            </div>

            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>DATE #</th>
                            <th>AMOUNT</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tbody>



                    @foreach ($transections as $item)

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

            <div class="card-footer">
              <p class="d-inline bg-success p-2">Balance: </p>   {{ $transections[0]->sale->amount - $transections->sum('amount')}} QR
            </div>


        </div>

    @else

    <div class="alert alert-info" role="alert">
        <strong>NO TRANSECTION FOUND....<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modelId">
            ADD TRANSECTION
          </button></strong>
    </div>
    @endif




    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">NEW TRANSECTION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('transections.new-transection',['sale_id' => $sale_id, 'visa_id' => $visa_id])
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div> --}}
            </div>
        </div>
    </div>



</div>

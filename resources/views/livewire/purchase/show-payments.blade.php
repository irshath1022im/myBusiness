<div>

    <div wire:loading >
        <div class="spinner-border text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
    </div>



    <div class="card" wire:loading.remove>

        <div class="card-header">
            <div class="card-title">PAYMENT HISTORY
                 <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
            </div>
        </div>

        <div class="card-body">
            @if (count($payments) > 0)

                <table class="table">
                    <thead>
                        <tr>
                            <th>DATE</th>
                            <th>AMOUNT</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($payments as $payment)
                            <tr>
                                <td scope="row">{{ $payment->date }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td>{{ $payment->remark }}</td>



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




{{-- ADDPAYMENTMODAL --}}








<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD PAYMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @livewire('purchase.add-payment',['purchase_id' => $purchase_id])
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> --}}
    </div>
  </div>
</div>










</div>

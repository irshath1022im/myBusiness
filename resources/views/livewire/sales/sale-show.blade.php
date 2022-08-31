<div>

    {{-- @dump($sale[0]['visa_assignment']) --}}

    @foreach ($sale as $item)



    {{-- @dump($sale) --}}
    @if (count($sale) > 0)



            <div class="card border-success">
                <div class="card-header">
                    <div class="card-title">SALE

                        {{-- @dump($item->visa_assignment) --}}

                      @empty($item->visa_assignment)
                        <button type="button" class="btn btn-primary"
                        role="button" data-bs-toggle="modal" data-bs-target="#modelId_visa_assignment"
                        >Assign Visa</button>

                        @else

                        <strong>Visa Assigned to :  {{  $item->visa_assignment->visa_holder->name }} </strong>

                        @endempty



                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>DATE</th>
                                <th>CUSTOMER NAME</th>
                                <th>SALE AMOUNT</th>
                                <th>REMARK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sale as $item)

                            <tr>
                                <td scope="row">{{ $item->id}}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->customer->customer }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->remark }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                    @livewire('transections.logs-by-customer-id',['sale_id' => $sale[0]['id'],'visa_id' => $visa_id])


                </div>


            </div>


            @else

                <div class="alert alert-info" role="alert">
                    <strong>NO SALES FOUND....</strong>
                </div>

            @endif





              <!-- Modal -->
              <div class="modal fade" id="modelId_visa_assignment" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><button class="btn">
                                  VISA ID <span class="badge bg-primary"> {{$visa_id}}</span>
                            </button></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                @livewire('visas.visa-assignment-form', ['visa_id' => $visa_id])
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>



 @endforeach




</div>

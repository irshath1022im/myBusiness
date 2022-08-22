<div>

    {{-- @dump($visa_id) --}}

    @if (count($sale) > 0)



            <div class="card">
                <div class="card-header">
                    <div class="card-title">SALE</div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SALE #</th>
                                <th>CUSTOMER NAME</th>
                                <th>SALE AMOUNT</th>
                                <th>REMARK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sale as $item)

                            <tr>
                                <td scope="row">{{ $item->id}}</td>
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
                    <strong>NO SALES FOUND....<a class="btn btn-outline-dark" role="button" data-bs-toggle="modal" data-bs-target="#modelId">SALE THIS VISA</a></strong>
                </div>

            @endif



            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><button class="btn">
                                  VISA ID <span class="badge bg-primary"> {{$visa_id}}</span>
                            </button></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @livewire('sales.new-sale', ['visa_id' => $visa_id])
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>








</div>

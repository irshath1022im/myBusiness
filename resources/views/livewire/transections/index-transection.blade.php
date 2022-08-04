<div>
    <div class="card">
        <div class="card-header">
            TRANSECTION LOGS / {{ $customer_id }}
        </div>
        <div class="card-body">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                  <button class="nav-link " id="nav-customer-tab" data-bs-toggle="tab" data-bs-target="#nav-customer" type="button" role="tab" aria-controls="nav-customer" aria-selected="true" wire:model="customer_id">CUSTOMER</button>
             
               
                  <button class="nav-link" id="nav-irshath-tab" data-bs-toggle="tab" data-bs-target="#nav-irshath" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">IRSHATH</button>
                </div>

              </nav>

              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab" tabindex="0" >

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ORDER #</th>
                                <th>BY</th>
                                <th>AMOUNT</th>
                                <th>REMARK</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @livewire('transections.logs-by-customer-id', ['customer_id' => $customer_id])
                            
                        </tbody>
                      </table>
                      
                </div>

                <div class="tab-pane fade" id="nav-irshath" role="tabpanel" aria-labelledby="nav-irshath-tab" tabindex="0">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ORDER #222</th>
                                <th>BY</th>
                                <th>AMOUNT</th>
                                <th>REMARK</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            @livewire('transections.logs-by-customer-id', ['customer_id' => 1])
                        </tbody>
                      </table>
                      
                </div>
             
              </div>
         
        </div>
   
    </div>
</div>

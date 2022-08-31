<div>

    {{-- @empty($visa)
        No Dat Found
    @endempty --}}

    <div class="card">
        <div class="card-header">
            <div class="card-title text-uppercase">VISA ID:{{ $visa->id }}</div>
        </div>
        <div class="card-body">


            {{--
                1. check the visa has been sold or not
                2. if sold display the livewire component sales.sale-show
                3. if not, prompt a modal for sale form
            --}}

            {{-- @dump($visa->sale) --}}



            @if (empty($visa->sale))
                @component('components.empty-data',['message' => 'Visa Not Sold Yet!!!'])

                @endcomponent

                <a class="btn btn-outline-dark" role="button" data-bs-toggle="modal" data-bs-target="#modelId">SALE THIS VISA</a>

            @else

                @livewire('sales.sale-show',['visa_id' => $visa->id])

            @endif


            <hr>


            @livewire('components.visa-cost',['visa_id' => $visa->id])




        </div>
    </div>





            <!-- Sale Form Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><button class="btn">
                                  VISA ID <span class="badge bg-primary"> {{$visa->id}}</span>
                            </button></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if (empty($visa->sale))

                                @livewire('sales.new-sale', ['visa_id' => $visa->id])

                            @else

                            @endif

                        </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div> --}}
                    </div>
                </div>
            </div>






</div>

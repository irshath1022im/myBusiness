<div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>VP NUMBER</th>
                <th>COUNTRY</th>
                <th>POSITION</th>
                <th>COMPANY</th>
                <th>COST</th>
                <th>STATUS</th>
                <th>ASSIGNED</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($visas as $visa)
                <tr>
                    <td scope="row">{{ $visa->id }}</td>
                    <td class="text-uppercase">{{ $visa->vpnumber }}</td>
                    <td class="text-uppercase">{{ $visa->country }}</td>
                    <td class="text-uppercase">{{ $visa->position }}</td>
                    <td class="text-uppercase">{{ $visa->company->company }}</td>
                    <td class="text-uppercase">{{ $visa->cost }}</td>
                    <td class="text-uppercase">

                        @if ($visa->sale_count > 0)
                        <a class="btn btn-danger"
                            href="{{ route('visas.show',['visa' => $visa->id]) }}"   role="button">SOLD
                        </a>
                        @else
                        <a class="btn btn-success"
                        href="{{ route('visas.show',['visa' => $visa->id]) }}"   role="button">IN STOCK
                        </a>
                        @endif



                    </td>

                    <td class="text-uppercase">
                        @empty($visa->visa_assignment)

                        <a href="{{ route('visas.show',['visa' => $visa->id]) }}">
                             <button type="button" class="btn btn-primary btn-sm">
                                Assign
                            </button>
                        </a>

                        @else
                        <button type="button" class="btn btn-success btn-sm">
                           {{$visa->visa_assignment->visa_holder->name}}
                           {{-- @dump($visa->visa_assignment) --}}
                        </button>

                        <button type="button" class="btn btn-success btn-sm">
                            {{$visa->visa_assignment->visa_number}}
                            {{-- @dump($visa->visa_assignment) --}}
                         </button>

                        @endempty

                    </td>





                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $visas->links() }}




<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" wire:iqnore>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('visas.visa-assignment-form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save</button> --}}
            </div>
        </div>
    </div>
</div>



</div>

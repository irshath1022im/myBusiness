
{{-- @dump($visas) --}}
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



{{--
                  <button class="btn btn-outline-warning">SOLD </button>
                    <a href="{{ route('visas.show',['visa' => $visa->id]) }}">
                        <button class="btn btn-info btn-sm">SALE DETAILS</button></a>
 --}}



                </td>

                <td class="text-uppercase">{{ $visa->visaHolderThruVisa ? $visa->visaHolderThruVisa->name : 'Not Assigned' }}</td>





            </tr>

        @endforeach
    </tbody>
</table>

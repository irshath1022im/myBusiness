  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>VP NUMBER</th>
            <th>COUNTRY</th>
            <th>POSITION</th>
            <th>COST</th>
            <th>COMPANY</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($visas as $visa)
            <tr>
                <td scope="row">{{ $visa->id }}</td>
                <td class="text-uppercase">{{ $visa->vpnumber }}</td>
                <td class="text-uppercase">{{ $visa->country }}</td>
                <td class="text-uppercase">{{ $visa->position }}</td>
                <td>{{ $visa->cost }}</td>
                <td class="text-uppercase">{{ $visa->company->company}}</td>
                <td>
                    <a href="{{ route('visas.show',['visa' => $visa->id]) }}">
                        <button class="btn btn-info btn-sm">SALE DETAILS</button></a>
                </td>

            </tr>

        @endforeach
    </tbody>
</table>
